<!DOCTYPE html>
<html>
<head>
<title>uva11456</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11456</h1>
<pre class="prettyprint">
//uva11456
#include&lt;iostream&gt;
#include&lt;cstdio&gt;

using namespace std;

int main(){
	int n, t, num[4010], lis[4010];
	int i, j, be, end, ans;

	while (scanf(&quot;%d&quot;, &amp;n) != EOF){
		while (n--){
			ans = 0;
			scanf(&quot;%d&quot;, &amp;t);
			if(t ==0){
				printf(&quot;0\n&quot;);
				continue;
			}
			for (i = 0; i &lt; t; i++){
				scanf(&quot;%d&quot;, &amp;num[t+i]);
				num[t-i-1] = num[t+i];
				lis[t-i-1] = 0;
				lis[t+i] = 0;
			}
			lis[0] = num[0];
			for (i = 1, ans = 0; i &lt; (2*t); i++){
				if(num[i] &gt; lis[ans]){
					lis[ans+1] = num[i];
					ans++;
				}
				else{
					for (j = 0; j &lt;= ans ; j++){
						if(num[i] &lt;= lis[j]){
							lis[j] = num[i];
							break;
						}
					}
				}
			}
			printf(&quot;%d\n&quot;, ans+1);
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