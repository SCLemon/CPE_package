<!DOCTYPE html>
<html>
<head>
<title>uva10025</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10025</h1>
<pre class="prettyprint">
//uva10025
#include &lt;cstdio&gt;
#include &lt;cmath&gt;

using namespace std;

int main() {
	int Case, k;
	scanf(&quot;%d&quot;, &amp;Case);
	while (Case--) {
		scanf(&quot;%d&quot;, &amp;k);
		k = abs(k);

		int n = 0, sum = 0;
		while (sum &lt; k) sum += (++n);

		if (k % 2)
			while (sum % 2 != 1) sum += (++n);
		else
			while (sum % 2 != 0) sum += (++n);

		if (k == 0) printf(&quot;3\n&quot;);
		else printf(&quot;%d\n&quot;, n);

		if (Case) printf(&quot;\n&quot;);
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