<!DOCTYPE html>
<html>
<head>
<title>uva512</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva512</h1>
<pre class="prettyprint">
//uva512
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;string&gt;
#include &lt;algorithm&gt;
using namespace std;

int main() {
	int r, c, n, m, r1, c1, r2, c2, flag, idx, count, rr, cc, temp;
	string s;

	idx = 0;
	scanf(&quot;%d%d&quot;, &amp;r, &amp;c);
	while (r != 0 || c != 0) {
		vector&lt; vector&lt;int&gt; &gt; data;
		vector&lt;int&gt; a;
		count = 0;
		for (int i = 0; i &lt; r; ++i) {
			for (int j = 0; j &lt; c; ++j) {
				a.push_back(count);
				++count;
			}
			data.push_back(a);
			a.clear();
		}

		scanf(&quot;%d&quot;, &amp;n);
		for (int k = 0; k &lt; n; ++k) {
			a.clear();
			cin &gt;&gt; s;
			if (s == &quot;EX&quot;)
				scanf(&quot;%d%d%d%d&quot;, &amp;r1, &amp;c1, &amp;r2, &amp;c2);
			else {
				scanf(&quot;%d&quot;, &amp;m);
				for (int j = 0; j &lt; m; ++j) {
					scanf(&quot;%d&quot;, &amp;temp);
					a.push_back(temp - 1);
				}
				sort(a.begin(), a.end());
			}

			if (s == &quot;EX&quot;)
				swap(data[r1 - 1][c1 - 1], data[r2 - 1][c2 - 1]);
			else if (s == &quot;DR&quot;) {
				for (int i = 0; i &lt; m; ++i)
					data.erase(data.begin() + a[i] - i);
			}
			else if (s == &quot;DC&quot;) {
				for (int i = 0; i &lt; m; ++i)
					for (int j = 0; j &lt; data.size(); ++j)
						data[j].erase(data[j].begin() + a[i] - i);
			}
			else if (s == &quot;IR&quot;) {
				for (int i = 0; i &lt; m; ++i)
					data.insert(data.begin() + a[i] + i, vector&lt;int&gt;(data[0].size(), -1));
			}
			else if (s == &quot;IC&quot;) {
				for (int i = 0; i &lt; m; ++i)
					for (int j = 0; j &lt; data.size(); ++j)
						data[j].insert(data[j].begin() + a[i] + i, -1);
			}
		}

		++idx;
		printf(&quot;Spreadsheet #%d\n&quot;, idx);
		scanf(&quot;%d&quot;, &amp;n);
		for (int k = 0; k &lt; n; ++k) {
			flag = 0;
			scanf(&quot;%d%d&quot;, &amp;rr, &amp;cc);
			for (int i = 0; i &lt; data.size(); ++i) {
				for (int j = 0; j &lt; data[0].size(); ++j) {
					if ( data[i][j] == (rr - 1) * c + (cc - 1) ) {
						printf(&quot;Cell data in (%d,%d) moved to (%d,%d)\n&quot;, rr, cc, i + 1, j + 1);
						flag = 1;
						break;
					}
				}

				if (flag == 1)
					break;
			}

			if (flag != 1)
				printf(&quot;Cell data in (%d,%d) GONE\n&quot;, rr, cc);
		}

		scanf(&quot;%d%d&quot;, &amp;r, &amp;c);
		if (r != 0 || c != 0)
			printf(&quot;\n&quot;);
	}

	return 0;
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->