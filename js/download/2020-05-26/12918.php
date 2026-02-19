<!DOCTYPE html>
<html>
<head>
<title>uva12918</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12918</h1>
<pre class="prettyprint">
//uva12918
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
int main() {
	int n;
	scanf(&quot;%d&quot;, &amp;n);
	while (n--) {
		long long int a, b;
		scanf(&quot;%lld %lld&quot;, &amp;a, &amp;b);
		long long int ans;
		ans = (b + b - a - 1) * a / 2 ;
		printf(&quot;%lld\n&quot;,ans);
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