<!DOCTYPE html>
<html>
<head>
<title>uva834</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva834</h1>
<pre class="prettyprint">
//uva834
#include &lt;iostream&gt;
#include &lt;vector&gt;
using namespace std;

int main() {
	int n, m, q, r;
	vector&lt;int&gt; a;

	while (scanf(&quot;%d%d&quot;, &amp;n, &amp;m) != EOF) {
		while (m &gt; 1) {
			q = n / m;
			r = n % m;
			a.push_back(q);
			n = m;
			m = r;
		}
		a.push_back(n);
		if (m == 0)
			a.pop_back();

		printf(&quot;[%d;&quot;, a[0]);
		n = a.size();
		for (int i = 1; i &lt; n - 1; ++i)
			printf(&quot;%d,&quot;, a[i]);
		printf(&quot;%d]\n&quot;, a[n - 1]);

		a.clear();
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