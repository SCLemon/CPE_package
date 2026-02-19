<!DOCTYPE html>
<html>
<head>
<title>uva1730</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1730</h1>
<pre class="prettyprint">
//uva1730
#include &lt;stdio.h&gt;
using namespace std;

int main() {
	long long n;
	while (scanf(&quot;%lld&quot;, &amp;n) == 1 &amp;&amp; n) {
	    long long l = 1, r, val;
        long long ret = 0;
        while (l &lt;= n) {
            val = n / l;
            r = n / val;
            ret += val * ((l + r) * (r - l + 1) / 2);
            l = r + 1;
        }
		printf(&quot;%lld\n&quot;, ret - 1);
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