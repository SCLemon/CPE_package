<!DOCTYPE html>
<html>
<head>
<title>uva10530</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10530</h1>
<pre class="prettyprint">
//uva10530
#include&lt;iostream&gt;
#include&lt;cstdio&gt;
#include&lt;cstring&gt;
#include&lt;cstdlib&gt;

int num[11];
char s1[10], s2[10];

main(){
	int n;
	int i, j, ans;
    while(scanf(&quot;%d&quot;,&amp;n) != EOF){
    	if(n == 0) break;
        memset(num, 0, sizeof(num));
        ans = 0;
        scanf(&quot;%s%s&quot;,s1,s2);
        while(s1[0] != &#39;r&#39;){
        	if(ans == 0){
            	if(s2[0] == &#39;h&#39;){
			    	for(i = n; i &lt;= 10; i++){
            			if(num[i] == -1)
                			ans = -1;
                		else
                			num[i] = 1;
        			}
				}
           		else{
                	for(i = n; i &gt;= 1; i--){
            			if(num[i] == 1)
                			ans = -1;
                		else
                			num[i] = -1;
        			}
            	}
            }
            scanf(&quot;%d%s%s&quot;,&amp;n,s1,s2);
        }
        if(ans == 0 &amp;&amp; num[n] == 0)
            printf(&quot;Stan may be honest\n&quot;);
        else
            printf(&quot;Stan is dishonest\n&quot;);
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