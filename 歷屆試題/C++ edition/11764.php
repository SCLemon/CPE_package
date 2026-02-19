<!DOCTYPE html>
<html>
<head>
<title>uva11764</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11764</h1>
<pre class="prettyprint">
//uva11764
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

int main(void) {
	int testcase = 0, N, i, h, l, c, d, T;
	scanf(&quot;%d&quot;, &amp;T);
	while(T--) {
		testcase++;
		h = l = 0;
		scanf(&quot;%d&quot;, &amp;N);
		N--;
		scanf(&quot;%d&quot;, &amp;c);
		for(i = 0; i &lt; N; i++) {
			scanf(&quot;%d&quot;, &amp;d);
			if(d &gt; c)
				h++;
			else if(d &lt; c)
				l++;
			c = d;
		}
		printf(&quot;Case %d: %d %d\n&quot;, testcase, h, l);
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