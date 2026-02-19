<!DOCTYPE html>
<html>
<head>
<title>uva591</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva591</h1>
<pre class="prettyprint">
//uva591
# include &lt;stdio.h&gt;
# define n_max 50

int main() {
	int n, h[n_max], sum, avg, move;
	int i, cnt = 1;
	while (scanf(&quot;%d&quot;, &amp;n) &amp;&amp; (n != 0)) {
		for (sum = 0, i = 0; i &lt; n; sum += h[i++])
			scanf(&quot;%d&quot;, &amp;h[i]);
		avg = sum / n;
		for (move = 0, i = 0; i &lt; n; i++)
			if (h[i] &gt; avg)
				move += h[i] - avg;
		printf(&quot;Set #%d\n&quot;, cnt++);
		printf(&quot;The minimum number of moves is %d.\n\n&quot;, move);
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