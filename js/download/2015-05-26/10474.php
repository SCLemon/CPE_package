<!DOCTYPE html>
<html>
<head>
<title>uva10474</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10474</h1>
<pre class="prettyprint">
//uva10474
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
#include &lt;cstring&gt;
#define MAX 10005

using namespace std;

int main(void) {
	int N, Q, cnt[MAX], x, i, cas = 1;
	bool v[MAX];

	while(scanf(&quot;%d %d&quot;, &amp;N, &amp;Q) &amp;&amp; (N || Q)) {
		printf(&quot;CASE# %d:\n&quot;, cas++);

		memset(cnt, 0, sizeof(cnt));
		memset(v, false, sizeof(v));
		for(i = 0; i &lt; N; ++i) {
			scanf(&quot;%d&quot;, &amp;x);
			++cnt[x];
			v[x] = true;
		}
		for(i = 1, cnt[0] = 1; i &lt; MAX; ++i)
			cnt[i] += cnt[i - 1];

		for(i = 0; i &lt; Q; ++i) {
			scanf(&quot;%d&quot;, &amp;x);
			if(!v[x]) printf(&quot;%d not found\n&quot;, x);
			else printf(&quot;%d found at %d\n&quot;, x, cnt[x - 1]);
		}
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