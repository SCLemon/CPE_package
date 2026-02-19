<!DOCTYPE html>
<html>
<head>
<title>uva1632</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1632</h1>
<pre class="prettyprint">
//uva1632
#include&lt;stdio.h&gt;
#include&lt;stdlib.h&gt;
#include &lt;algorithm&gt;

int a[10010],  b[10010],  d[10010][10010][2];

int main(void) {
	int i, j, k, n, cur, minv;
	while(scanf(&quot;%d&quot;, &amp;n) == 1) {
		for(i = 1; i &lt;= n; i++)
			scanf(&quot;%d%d&quot;, &amp;a[i], &amp;b[i]);
		
		for(i = 0; i &lt;= n; i++)
			for(j = 0; j &lt;= n; j++)
				d[i][j][0] = d[i][j][1] = (1 &lt;&lt; 30);				
		for(i = 1; i &lt;= n; i++)
			d[i][i][0] = d[i][i][1] = 0;			
		for(i = n; i &gt; 0; i--) {
			for(j = i + 1; j &lt;= n; j++) {
				d[i][j][0] = std::min(d[i + 1][j][0] + a[i + 1] - a[i], d[i + 1][j][1] + a[j] - a[i]);
				if(d[i][j][0] &gt;= b[i])
					d[i][j][0] = (1 &lt;&lt; 30);
				d[i][j][1] = std::min(d[i][j - 1][0] + a[j] - a[i], d[i][j - 1][1] + a[j] - a[j - 1]);
				if(d[i][j][1] &gt;= b[j])
					d[i][j][1] = (1 &lt;&lt; 30);					
			}
		}
		minv = std::min(d[1][n][0], d[1][n][1]);
		if(minv == (1 &lt;&lt; 30))
			printf(&quot;No solution\n&quot;);
		else
			printf(&quot;%d\n&quot;, minv);
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