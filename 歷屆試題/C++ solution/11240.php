<!DOCTYPE html>
<html>
<head>
<title>uva11240</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11240</h1>
<pre class="prettyprint">
//uva11240
#include &lt;iostream&gt;
#include &lt;vector&gt;
using namespace std;

int main() {
	int n, m, temp, flag, sum;
	vector&lt;int&gt; a;

	scanf(&quot;%d&quot;, &amp;n);
	for (int i = 0; i &lt; n; ++i) {
		scanf(&quot;%d&quot;, &amp;m);
		for (int j = 0; j &lt; m; ++j) {
			scanf(&quot;%d&quot;, &amp;temp);
			a.push_back(temp);
		}

		flag = 0;
		sum = 1;
		for (int j = 1; j &lt; m; ++j) {
			if (flag == 0 &amp;&amp; a[j - 1] &gt; a[j]) {
				++sum;
				flag = 1;
			}
			else if (flag == 1 &amp;&amp; a[j - 1] &lt; a[j]) {
				++sum;
				flag = 0;
			}
		}

		printf(&quot;%d\n&quot;, sum);
		a.clear();
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