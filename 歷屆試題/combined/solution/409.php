<!DOCTYPE html>
<html>
<head>
<title>uva409</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva409</h1>
<pre class="prettyprint">
//uva409
#include&lt;cstring&gt;
#include&lt;string&gt;
#include&lt;map&gt;
#include&lt;iostream&gt;
#include&lt;cstdio&gt;
#define DEFAULT 10000

using namespace::std;

int main() {
	long m, n, cnt, feq[DEFAULT], time = 1;
	string point, p, fun[DEFAULT];
	char word, exc[DEFAULT], good[DEFAULT];
	int maximum, x, y, z;
	while (cin &gt;&gt; m &gt;&gt; n) {
		cout &lt;&lt; &quot;Excuse Set #&quot; &lt;&lt; time &lt;&lt; endl;
		for (int i = 0; i &lt; n; i++)
			fun[i] = &quot;&quot;;
		
		map&lt;string, bool&gt; MAP;
		for (int i = 1; i &lt;= m; i++) {
			cin &gt;&gt; point;
			MAP[point] = true;
		}
		maximum = x = cnt = 0;
		y = z = -1;
		getchar();
		
		while (scanf(&quot;%c&quot;, &amp;word) == 1) {
			good[++z] = word;
			word = tolower(word);
			if (isalpha(word))
				exc[++y] = word;
			else if (word != &#39;\n&#39;) {
				exc[y + 1] = &#39;\0&#39;;
				p = exc;
				if (MAP[p])
					cnt++;
				y = -1;
			}
			else {
				exc[y + 1] = &#39;\0&#39;;
				if (strlen(exc) != 0) {
					p = exc;
					if (MAP[p])
						cnt++;
				}
				feq[x] = cnt;
				if (cnt &gt; maximum)
					maximum = cnt;
				good[z + 1] = &#39;\0&#39;;
				fun[x++] = good;
				y = z = -1;
				cnt = 0;
				if (x == n)
					break;
			}
		}
		for (int j = 0; j &lt; x; j++)
			if (maximum == feq[j])
				cout &lt;&lt; fun[j];
		cout &lt;&lt; endl;
		time++;
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