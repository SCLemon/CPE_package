<!DOCTYPE html>
<html>
<head>
<title>uva11063</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11063</h1>
<pre class="prettyprint">
//uva11063
#include &lt;stdio.h&gt;

int main() {
	int b[100], n, i, j, t = 1, flag;
	int check[20001];

	while(scanf(&quot;%d&quot;, &amp;n) == 1)
	{
		flag = 1;
		for(i = 0; i &lt; 20001; i++)
			check[i] = 0;
		for(i = 0; i &lt; n; i++) {
			scanf(&quot;%d&quot;, &amp;b[i]);
			if(b[i] &lt; 1)
				flag = 0;
		}

		for(i = 0; i &lt; n; i++)
			for(j = i;j &lt; n; j++) {
				if(check[b[i] + b[j]] || b[j] &lt; b[i])
					flag = 0;
				else
					check[b[i] + b[j]]=1;
			}
		
		if(flag)
			printf(&quot;Case #%d: It is a B2-Sequence.\n\n&quot;,t++);
		else
			printf(&quot;Case #%d: It is not a B2-Sequence.\n\n&quot;,t++);
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