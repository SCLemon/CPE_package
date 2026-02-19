<!DOCTYPE html>
<html>
<head>
<title>uva12455</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12455</h1>
<pre class="prettyprint">
//uva12455
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;string&gt;
using namespace std;

int main() {
	int t, m, n;
	string s;
	vector&lt;int&gt; a(20);
	vector&lt; vector&lt;bool&gt; &gt; b( 20, vector&lt;bool&gt;(20010) );

	scanf(&quot;%d&quot;, &amp;t);
	for (int k = 0; k &lt; t; ++k) {
		s = &quot;NO&quot;;
		scanf(&quot;%d%d&quot;, &amp;m, &amp;n);
		for (int i = 0; i &lt; n; ++i)
			scanf(&quot;%d&quot;, &amp;a[i]);

		for (int i = 0; i &lt; n; ++i)
			for (int j = 0; j &lt;= m; ++j)
				b[i][j] = false;

		b[0][0] = true;
		b[0][ a[0] ] = true;
		if (a[0] == m)
			s = &quot;YES&quot;;

		for (int i = 1; i &lt; n; ++i) {
			for (int j = 0; j &lt;= m; ++j)
				if (b[i - 1][j] == true) {
					b[i][j] = true;
					b[i][j + a[i]] = true;
				}
			if (b[i][m] == true) {
				s = &quot;YES&quot;;
				break;
			}
		}

		cout &lt;&lt; s &lt;&lt; endl;
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