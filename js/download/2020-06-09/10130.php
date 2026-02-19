<!DOCTYPE html>
<html>
<head>
<title>uva10130</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10130</h1>
<pre class="prettyprint">
//uva10130
#include&lt;bits/stdc++.h&gt;

using namespace std;
 
int main()
{
	int T, N, G, gw, ans;
	int i, j;
	int p[1005], w[1005], eachp[35];
	
	scanf(&quot;%d&quot;, &amp;T);
	while (T--){
		scanf(&quot;%d&quot;, &amp;N);
		for(i = 0; i &lt; N; i++){
			scanf(&quot;%d%d&quot;, &amp;p[i], &amp;w[i]);
		}
		
		memset(eachp, 0, sizeof(eachp));
		
		for(i = 0; i &lt; N; i++){
			for(j = 30; j &gt;= w[i]; j--){
				if(eachp[j - w[i]] + p[i] &gt; eachp[j]){
					eachp[j] = eachp[j - w[i]] + p[i];
				}
			}
		}
		
		ans = 0;
		scanf(&quot;%d&quot;, &amp;G);
		for(i = 0; i &lt; G; i++){
			scanf(&quot;%d&quot;, &amp;gw);
			ans += eachp[gw];
		}
		
		printf(&quot;%d\n&quot;, ans);
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