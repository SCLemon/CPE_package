<!DOCTYPE html>
<html>
<head>
<title>uva11054</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11054</h1>
<pre class="prettyprint">
//uva11054
#include &lt;cstdio&gt;
#include &lt;iostream&gt;

using namespace std;

int main() {
	int n, i;
	int a[100005];
	long long int ans;
	while (scanf(&quot;%d&quot;, &amp;n) &amp;&amp; n) {
		for (i = 0 ; i &lt; n ; i++)
			scanf(&quot;%d&quot;,&amp;a[i]);
		ans = 0;
		for (i = 0 ; i &lt; n ; i++) {
			ans += (a[i] &gt;= 0 ? a[i] : -a[i]);
			a[i + 1] = a[i] + a[i + 1];
		}

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