<!DOCTYPE html>
<html>
<head>
<title>uva10487</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10487</h1>
<pre class="prettyprint">
//uva10487
#include &lt;cstdio&gt;
#include &lt;iostream&gt;

using namespace std;

int n, m, a[1005];

int int_abs(int n) { return n &gt;= 0 ? n : -n; }

int solve(int num) {
	int i, j, ans = a[0]+a[1]; // at least two
	for(i = 0; i &lt; n; i++)
		for(j = i + 1; j &lt; n; j++)
			if(int_abs(a[i] + a[j] - num) &lt; int_abs(ans - num))
				ans = a[i] + a[j];
	return ans;
}

int main() {
	int i, req, tcnt = 0;
	while(scanf(&quot;%d&quot;, &amp;n) == 1 &amp;&amp; n != 0) {
		printf(&quot;Case %d:\n&quot;, ++tcnt);
		for(i = 0; i &lt; n; i++)
			scanf(&quot;%d&quot;, &amp;a[i]);
		scanf(&quot;%d&quot;, &amp;m);
		for(i = 0; i &lt; m; i++) {
			scanf(&quot;%d&quot;, &amp;req);
			printf(&quot;Closest sum to %d is %d.\n&quot;, req, solve(req));
		}
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