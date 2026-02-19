<!DOCTYPE html>
<html>
<head>
<title>uva499</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva499</h1>
<pre class="prettyprint">
//uva499
#include &lt;stdio.h&gt; 
#include &lt;iostream&gt; 
#include &lt;string.h&gt; 
#include &lt;stdlib.h&gt; 
#include &lt;math.h&gt; 

using namespace std;

int main(void) {
	int i, n[128], ans;
	char c, d;
	memset(n, 0, sizeof(n));
	while(scanf(&quot;%c&quot;, &amp;c) != EOF) {
		if(c != &#39;\n&#39;)
			n[c]++;
		else {
			ans=0;
			for(d = &#39;A&#39;; d &lt;= &#39;Z&#39;; d++)
				if(n[d] &gt; ans)
					ans = n[d];
			for(d = &#39;a&#39;; d &lt;= &#39;z&#39;; d++)
				if(n[d] &gt; ans)
					ans = n[d];
			for(d = &#39;A&#39;; d &lt;= &#39;Z&#39;; d++)
				if(n[d] == ans)
					printf(&quot;%c&quot;, d);
			for(d = &#39;a&#39;; d &lt;= &#39;z&#39;; d++)
				if(n[d] == ans)
					printf(&quot;%c&quot;, d);
			printf(&quot; %d\n&quot;, ans);
			memset(n, 0, sizeof(n));
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