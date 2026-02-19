<!DOCTYPE html>
<html>
<head>
<title>uva11538</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>ç¯„ä¾‹ç¨‹å¼ç¢¼ uva11538</h1>
<pre class="prettyprint">
//uva11538
#include &lt;cstdio&gt;
#include &lt;iostream&gt;

using namespace std;

typedef long long LL;

int main() {
	LL n, m, ans; // n &gt;= m
	while (scanf(&quot;%lld%lld&quot;, &amp;m, &amp;n)) {
		if (m == 0 &amp;&amp; n == 0)
			break;
		if (m &gt; n) swap(m, n);
		ans = 2 * n * (m * (m - 1) / 2) + 2 * m * (n * (n - 1) / 2); // ª½¸ò¾î
		ans = ans + 2 * 2 * ((n - m + 1) * (m * (m - 1) / 2) + 2 * ((m) * (m - 1) * (m - 2) / 6)); // ±×
		printf(&quot;%lld\n&quot;, ans);
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