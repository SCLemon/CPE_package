<!DOCTYPE html>
<html>
<head>
<title>uva494</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva494</h1>
<pre class="prettyprint">
//uva494
#include &lt;stdio.h&gt;

int main () {
	char In, M, N, Cou;

	while (scanf(&quot;%c&quot;, &amp;In) == 1) {
		M = 0; Cou = 0;
		while (In != &#39;\n&#39;) {
			if ((65 &lt;= In &amp;&amp; In &lt;= 90) || (97 &lt;= In &amp;&amp; In &lt;= 122)) N = 1;
			else N = 0;
			
			if (M == 0 &amp;&amp; N == 1) Cou++;
			M = N;

			scanf(&quot;%c&quot;, &amp;In);
		}
		printf(&quot;%d\n&quot;, Cou);
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