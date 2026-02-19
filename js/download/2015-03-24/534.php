<!DOCTYPE html>
<html>
<head>
<title>uva534</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva534</h1>
<pre class="prettyprint">
//uva534
#include &lt;cstdio&gt;
#include &lt;cmath&gt;
#include &lt;iostream&gt;
#define MAXN 205

using namespace std;

double d[MAXN][MAXN];
int x[MAXN], y[MAXN];

double dis(int i, int j) {
	double dx = x[i] - x[j];
	double dy = y[i] - y[j];
	return sqrt(dx * dx + dy * dy);
}

int main() {
	int i, j, k, n, testcase = 0;

	while (scanf(&quot;%d&quot;,&amp;n) &amp;&amp; n) {
		for (i = 0; i &lt; n; i++)
			scanf(&quot;%d %d&quot;,&amp;x[i],&amp;y[i]);

		for (i = 0; i &lt; n; i++)
			for (j = 0; j &lt; n; j++)
				d[i][j] = dis(i,j);

		for (k = 0; k &lt; n; k++)
			for (i = 0; i &lt; n; i++)
				for (j = 0; j &lt; n; j++)
					d[i][j] = min(max(d[i][k], d[k][j]), d[i][j]);
				
		printf(&quot;Scenario #%d\n&quot;, ++testcase);
		printf(&quot;Frog Distance = %.3lf\n\n&quot;, d[0][1]);
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