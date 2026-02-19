<!DOCTYPE html>
<html>
<head>
<title>uva299</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva299</h1>
<pre class="prettyprint">
//uva299
#include &lt;stdio.h&gt;

int main()
{
	int n, l, i, k, tr[100], t, count;
	scanf(&quot;%d&quot;, &amp;n);
	while(n--) {
		for(i = 0; i &lt; 100; i++)
			tr[i] = 0;
		count = 0;
		scanf(&quot;%d&quot;, &amp;l);
		for(i = 0; i &lt; l; i++)
			scanf(&quot;%d&quot;, &amp;tr[i]);
		for(i = 0; i &lt; l - 1; i++)
			for(k = 0; k &lt; l - 1; k++)
				if(tr[k]&gt;tr[k+1])
				{
					t = tr[k];
					tr[k] = tr[k + 1];
					tr[k + 1] = t;
					count++;
				}
		printf(&quot;Optimal train swapping takes %d swaps.\n&quot;,count);
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