<!DOCTYPE html>
<html>
<head>
<title>uva11472</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11472</h1>
<pre class="prettyprint">
//uva11472
#include &lt;algorithm&gt;
#include &lt;iostream&gt;
#include &lt;cstring&gt;

using namespace std;

int dp[101][11][1025];

int main() {
	int t, n, m;
	while (cin &gt;&gt; t)
	while (t--) {
		cin &gt;&gt; n &gt;&gt; m;
		memset(dp, 0, sizeof(dp));
		for (int i = 1; i &lt; n; ++i)
			dp[0][i][1 &lt;&lt; i] = 1;
		int u = 1 &lt;&lt; n, b1, b2;
		for (int i = 0; i &lt; m; ++i) {
			for (int j = 0; j &lt; n; ++j) {
				for (int k = 1; k &lt; u; ++k) {
					b1 = k | (1 &lt;&lt; (j - 1));
					if (j &gt; 0)
						dp[i + 1][j - 1][b1] = (dp[i + 1][j - 1][b1] + dp[i][j][k]) % 1000000007;
					b2 = k | (1 &lt;&lt; (j + 1));
					if (j &lt; n - 1)
						dp[i + 1][j + 1][b2] = (dp[i + 1][j + 1][b2] + dp[i][j][k]) % 1000000007;
				}
			}
		}
		
		int sum = 0;
		for (int i = 0; i &lt; m; ++i)
			for (int j = 0; j &lt; n; ++j)
				sum = (sum + dp[i][j][u - 1]) % 1000000007;

		cout &lt;&lt; sum &lt;&lt; endl;
	}
	return 0;
}
</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->