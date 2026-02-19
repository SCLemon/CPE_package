<!DOCTYPE html>
<html>
<head>
<title>uva913</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva913</h1>
<pre class="prettyprint">
//uva913
#include &lt;stdio.h&gt;
#include &lt;assert.h&gt;

int main() {
	unsigned long long N;

	while (scanf(&quot;%llu&quot;, &amp;N) == 1) {
		N = (N + 1) * (N + 1) * 3 / 2 - 9;
		printf(&quot;%llu\n&quot;, N);
	}

	return 0;
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->