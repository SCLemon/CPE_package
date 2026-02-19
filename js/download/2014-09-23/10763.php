<!DOCTYPE html>
<html>
<head>
<title>uva10763</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10763</h1>
<pre class="prettyprint">
//uva10763
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;algorithm&gt;

#define N 500005

using namespace std;

typedef pair&lt;int, int&gt; PII;

int n;
PII a[N], b[N];

int main(void) {
	int i;

	while(scanf(&quot;%d&quot;, &amp;n) == 1 &amp;&amp; n) {
		for(i = 0; i &lt; n; ++i) {
			scanf(&quot;%d%d&quot;, &amp;a[i].first, &amp;a[i].second);
			b[i].first = a[i].second;
			b[i].second = a[i].first;
		}

		sort(a, a + n);
		sort(b, b + n);

        for(i = 0; i &lt; n &amp;&amp; a[i].second == b[i].second; ++i);

        if(i == n) puts(&quot;YES&quot;);
        else puts(&quot;NO&quot;);
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