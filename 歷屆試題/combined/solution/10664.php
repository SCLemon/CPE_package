<!DOCTYPE html>
<html>
<head>
<title>uva10664</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10664</h1>
<pre class="prettyprint">
//uva10664
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
int dp[4002];
int main(void){
    int TC, l[21], sz, a, sum, i, j;
    char c;
    scanf(&quot;%d&quot;, &amp;TC);
    while(TC--){
        sz = sum = 0;
        while(scanf(&quot;%d%c&quot;,&amp;l[sz],&amp;c)==2){
            sum = sum + l[sz];
            sz++;
            if(c==&#39;\n&#39;)
                break;
        }
        if(sum%2){
            printf(&quot;NO\n&quot;);
            continue;
        }
        else{
            sum = sum / 2;
            memset(dp, 0, sizeof(dp));
            dp[0] = 1;
            for(i = 0; i &lt; sz; i++){
                for(j = sum - l[i]; j &gt;= 0; j--)
                    if(dp[j] &amp;&amp; !dp[j + l[i]])
                        dp[j + l[i]]=1;
            }
            if(dp[sum])
                printf(&quot;YES\n&quot;);
            else
                printf(&quot;NO\n&quot;);
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