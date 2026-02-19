<!DOCTYPE html>
<html>
<head>
<title>uva501</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva501</h1>
<pre class="prettyprint">
//uva501
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;queue&gt;
#include &lt;vector&gt;
#define N 30010

using namespace std;

typedef priority_queue&lt;int&gt; PQI;

int k, m, n, I;
int a[N], u[N];

int main(void) {
	int i, l;
	scanf(&quot;%d&quot;, &amp;k);
	
	while(k--) {
		PQI minQ, maxQ;
		scanf(&quot;%d%d&quot;, &amp;m, &amp;n);

		for(i = 1; i &lt;= m; ++i) scanf(&quot;%d&quot;, &amp;a[i]);
		for(i = 1; i &lt;= n; ++i) scanf(&quot;%d&quot;, &amp;u[i]);

		I = 1;
		for(l = 1; l &lt;= m; ++l) {
			maxQ.push(a[l]);
			minQ.push(-maxQ.top());
			maxQ.pop();

			while(I &lt;= n &amp;&amp; u[I] == l) {
				maxQ.push(-minQ.top()); minQ.pop();
				printf(&quot;%d\n&quot;, maxQ.top());
				++I;
			}
		}

		if(k) putchar(&#39;\n&#39;);
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