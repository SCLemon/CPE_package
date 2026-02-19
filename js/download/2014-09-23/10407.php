<!DOCTYPE html>
<html>
<head>
<title>uva10407</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10407</h1>
<pre class="prettyprint">
//uva10407
#include &lt;cstdio&gt;
#include &lt;iostream&gt;

using namespace std;

int ABS(int x) { return x &lt; 0 ? -x : x; }
int GCD(int a, int b) { return b == 0 ? a : GCD(b, a%b); }

int main(void) {
	int num[1005], ans, i, j, n;
	
	while(scanf(&quot;%d&quot;, &amp;num[0]) &amp;&amp; num[0]) {
		n = 1; ans = 0;
		while(scanf(&quot;%d&quot;, &amp;num[n]) &amp;&amp; num[n])
			++n;

		for(i = 0; i &lt; n; ++i)
			for(j = i + 1; j &lt; n; ++j)
				if(num[i] - num[j] != 0)
					ans = GCD(ABS(num[i] - num[j]), ans);

		printf(&quot;%d\n&quot;, ans);
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