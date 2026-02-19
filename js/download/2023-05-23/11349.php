<!DOCTYPE html>
<html>
<head>
<title>uva11349</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11349</h1>
<pre class="prettyprint">
//uva11349
#include &lt;iostream&gt;
#include &lt;vector&gt;
using namespace std;

int main() {
	int t, n, half, symmetric;
	vector&lt; vector&lt;long long&gt; &gt; a( 101, vector&lt;long long&gt;(101) );
	scanf(&quot;%d&quot;, &amp;t);

	for (int k = 1; k &lt;= t; ++k) {
		symmetric = 1;
		scanf(&quot;\nN = %d&quot;, &amp;n);
		for (int i = 0; i &lt; n; ++i) {
			for (int j = 0; j &lt; n; ++j) {
				scanf(&quot;%lld&quot;, &amp;a[i][j]);
				if (a[i][j] &lt; 0)
					symmetric = 0;
			}
		}

		half = n / 2 + 1;
		for (int i = 0; i &lt; half; ++i) {
			if (symmetric == 0)
				break;

			for (int j = 0; j &lt; n; ++j) {
				if (a[i][j] != a[n - i - 1][n - j - 1]) {
					symmetric = 0;
					break;
				}
			}
		}

		if (symmetric == 1)
			printf(&quot;Test #%d: Symmetric.\n&quot;, k);
		else
			printf(&quot;Test #%d: Non-symmetric.\n&quot;, k);
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