<!DOCTYPE html>
<html>
<head>
<title>uva10032</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10032</h1>
<pre class="prettyprint">
//uva10032
#include&lt;stdio.h&gt;

int main(void) {
	int t, n, i, j;
	int A[100];
	scanf(&quot;%d&quot;, &amp;t);
	while(t--) {
		scanf(&quot;%d&quot;, &amp;n);
		int sum = 0;
		for(i = 0; i &lt; n; i++)
			scanf(&quot;%d&quot;, &amp;A[i]), sum+=A[i];
		int hsum = sum / 2, hn = n / 2;
		long long dp[hsum + 1];
		for(i = 0; i &lt;= hsum; i++)
			dp[i] = 0;
		dp[0] = 1;
		for(i = 0; i &lt; n; i++) {
			for(j = hsum; j &gt;= A[i]; j--)
				dp[j] |= dp[j - A[i]] &lt;&lt; 1LL;
		}
		if(n % 2)
			while(!(dp[hsum] &amp; (1LL &lt;&lt; hn)) &amp;&amp; !(dp[hsum] &amp; (1LL &lt;&lt; (hn  +1))))
				hsum--;
		else
			while(!(dp[hsum] &amp; (1LL &lt;&lt; hn)))
				hsum--;

		printf(&quot;%d %d\n&quot;, hsum, sum - hsum);
		if(t)
			printf(&quot;\n&quot;);
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