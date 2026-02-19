<!DOCTYPE html>
<html>
<head>
<title>uva11942</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11942</h1>
<pre class="prettyprint">
//uva11942
#include &lt;cstdio&gt;
#include &lt;iostream&gt;

using namespace std;

int a[10];

bool ordered() {
	int *p = &amp;a[-1];
	int i;
	if (p[1] &gt; p[2]) { // dec
		for (i = 2; i &lt;= 10; ++i)
			if (p[i-1] &lt; p[i])
				return false;
	}
	else { // p[1] &lt; p[2],  inc
		for (i = 2; i &lt;= 10; ++i)
			if (p[i-1] &gt; p[i])
				return false;
	}
	return true;
}

int main() {
	int i, t;
	scanf(&quot;%d&quot;, &amp;t);
	printf(&quot;Lumberjacks:\n&quot;);
	while (t--) {
		for (i = 0; i &lt; 10; ++i)
			scanf(&quot;%d&quot;, &amp;a[i]);

		if (ordered()) printf(&quot;Ordered\n&quot;);
		else printf(&quot;Unordered\n&quot;);
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