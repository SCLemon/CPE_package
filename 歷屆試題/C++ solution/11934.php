<!DOCTYPE html>
<html>
<head>
<title>uva11934</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11934</h1>
<pre class="prettyprint">
//uva11934
#include &lt;iostream&gt;
using namespace std;

int main() {
	int a, b, c, d, L, count;

	scanf(&quot;%d%d%d%d%d&quot;, &amp;a, &amp;b, &amp;c, &amp;d, &amp;L);
	while (a != 0 || b != 0 || c != 0 || d != 0 || L != 0) {
		count = 0;
		for (int i = 0; i &lt;= L; ++i) {
			if ((a * i * i + b * i + c) % d == 0)
				++count;
		}
		printf(&quot;%d\n&quot;, count);
		scanf(&quot;%d%d%d%d%d&quot;, &amp;a, &amp;b, &amp;c, &amp;d, &amp;L);
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