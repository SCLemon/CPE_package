<!DOCTYPE html>
<html>
<head>
<title>uva1366</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1366</h1>
<pre class="prettyprint">
//uva1366
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt;
using namespace std;

int main() {
	int n, m, i, j;
	vector&lt;vector&lt;int&gt;&gt; y(500, vector&lt;int&gt;(500));
	vector&lt;vector&lt;int&gt;&gt; b(500, vector&lt;int&gt;(500));
	vector&lt;vector&lt;int&gt;&gt; y2(500, vector&lt;int&gt;(500));
	vector&lt;vector&lt;int&gt;&gt; b2(500, vector&lt;int&gt;(500));
	vector&lt;vector&lt;int&gt;&gt; dp(500, vector&lt;int&gt;(500));

	scanf(&quot;%d%d&quot;, &amp;n, &amp;m);
	while (n != 0 || m != 0) {
		for (i = 0; i &lt; n; ++i) {
			for (j = 0; j &lt; m; ++j)
				scanf(&quot;%d&quot;, &amp;y[i][j]);
		}
		for (i = 0; i &lt; n; ++i) {
			for (j = 0; j &lt; m; ++j)
				scanf(&quot;%d&quot;, &amp;b[i][j]);
		}

		for (i = n - 1; i &gt;= 0; --i) {
			y2[i][m - 1] = y[i][m - 1];
			for (j = m - 2; j &gt;= 0; --j)
				y2[i][j] = y2[i][j + 1] + y[i][j];
		}
		for (i = n - 2; i &gt;= 0; --i) {
			for (j = m - 1; j &gt;= 0; --j)
				y2[i][j] += y2[i + 1][j];
		}
		
		for (i = n - 1; i &gt;= 0; --i) {
			b2[i][m - 1] = b[i][m - 1];
			for (j = m - 2; j &gt;= 0; --j)
				b2[i][j] = b2[i][j + 1] + b[i][j];
		}
		for (i = n - 2; i &gt;= 0; --i) {
			for (j = m - 1; j &gt;= 0; --j)
				b2[i][j] += b2[i + 1][j];
		}

		dp[n - 1][m - 1] = max(y[n - 1][m - 1], b[n - 1][m - 1]);
		for (j = m - 2; j &gt;= 0; --j)
			dp[n - 1][j] = max(b2[n - 1][j], y[n - 1][j] + dp[n - 1][j + 1]);
		for (i = n - 2; i &gt;= 0; --i)
			dp[i][m - 1] = max(y2[i][m - 1], b[i][m - 1] + dp[i + 1][m - 1]);
		for (i = n - 2; i &gt;= 0; --i) {
			for (j = m - 2; j &gt;= 0; --j)
				dp[i][j] = max(b2[i][j] - b2[i + 1][j] + dp[i + 1][j], y2[i][j] - y2[i][j + 1] + dp[i][j + 1]);
		}

		printf(&quot;%d\n&quot;, dp[0][0]);
		scanf(&quot;%d%d&quot;, &amp;n, &amp;m);
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