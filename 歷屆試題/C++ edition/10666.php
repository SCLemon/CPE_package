<!DOCTYPE html>
<html>
<head>
<title>uva10666</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10666</h1>
<pre class="prettyprint">
//uva10666
#include &lt;stdio.h&gt;

int main() {
	int n, x, t, i, k, j;
	int win, lose;

	// two[i] = 2^i
	int two[33] = {0, 1};
	for(i = 2; i &lt; 33; ++i)
		two[i] = two[i-1] * 2;

	scanf(&quot;%d&quot;, &amp;t);
	while(t--) {
		win = lose = 0;
		scanf(&quot;%d %d&quot;, &amp;n, &amp;x);
		++n;
		k = x;
		for(i = 1; i &lt; n &amp;&amp; k % 2 == 0; ++i)
			k /= 2;
		for(j = i; j &lt; n; ++j) {
			if(k % 2 == 1)
				lose++;
			k /= 2;
		}

		win = two[i] - 1;

		printf(&quot;%d %d\n&quot;, lose + 1, two[n] - win);
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