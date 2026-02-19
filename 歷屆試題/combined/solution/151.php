<!DOCTYPE html>
<html>
<head>
<title>uva151</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva151</h1>
<pre class="prettyprint">
//uva151
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

int find(int n,int m) {
	int in[100], last, c, i, k;
	for(i = 0; i &lt; 100; i++)
	in[i] = 0;

	for(i = 1, k = m, c = 0; c &lt; n;) {
		if(!in[i] &amp;&amp; i &lt;= n) {
			if(k == m) {
				last = i;
				c++;
				k = in[i] = 1;
			}
			else {
				i++;
				k++;
			}
		}
		else {
			i++;
			if(i &gt; n)
				i = 1;
		}
	}

	if(last == 13)
		return 1;
	return 0;
}

int main()
{
	int n,m;
	while(scanf(&quot;%d&quot;, &amp;n) == 1 &amp;&amp; n != 0) {
		for(m = 1; ; m++)
			if(find(n, m)) {
				printf(&quot;%d\n&quot;, m);
				break;
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