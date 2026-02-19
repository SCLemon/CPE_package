<!DOCTYPE html>
<html>
<head>
<title>uva11039</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11039</h1>
<pre class="prettyprint">
//uva11039
#include&lt;stdio.h&gt;
#include&lt;stdlib.h&gt;
#include&lt;string.h&gt;
#include&lt;math.h&gt;
#include&lt;algorithm&gt;
using namespace std;

bool cmp(int a,  int b) {
	return abs(a) &lt; abs(b);
}

int main() {
	int floor[500000];
	int T, num, i;
	while(scanf(&quot;%d&quot;,  &amp;T) == 1) {
		while(T--)
		{
			int judge = 0, ans = 0, last = 0;
			memset(floor, 0, sizeof(floor));
			scanf(&quot;%d&quot;, &amp;num);
			for(i = 0; i &lt;num; i++)
				scanf(&quot;%d&quot;, &amp;floor[i]);
			sort(floor, floor+num, cmp);
			for(i = 0; i &lt; num; i++) {
				if(judge == 0) {
					last = abs(floor[i]);
					ans++;
					judge = floor[i] &gt; 0 ? 2 : 1;
				}
				else if(judge == 1 &amp;&amp; abs(floor[i]) &gt; last &amp;&amp; floor[i] &gt; 0) {
					last = abs(floor[i]);
					ans++;
					judge = 2;
				}
				else if(judge == 2 &amp;&amp; abs(floor[i]) &gt; last &amp;&amp; floor[i] &lt; 0) {
					last = abs(floor[i]);
					ans++;
					judge = 1;
				}
			}
			printf(&quot;%d\n&quot;, ans);
		}
		return 0;
	}
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