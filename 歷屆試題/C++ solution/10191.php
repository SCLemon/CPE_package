<!DOCTYPE html>
<html>
<head>
<title>uva10191</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10191</h1>
<pre class="prettyprint">
//uva10191
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
int n;
char str[12000];
int time[12000][2];
int cmp(const void*a,const void*b){
    int *p = (int*)a;
    int *q = (int*)b;
    return p[0] - q[0];
}
int main(){
    int i, ans, maxtime, h, m;
    int Case = 0;
    while(scanf(&quot;%d&quot;, &amp;n) != EOF){
        time[0][0] = 0;
        time[0][1] = 10*60;
        for(i = 1; i &lt;= n; ++i){
            scanf(&quot;%d%*c%d&quot;, &amp;h, &amp;m);
            time[i][0] = h * 60 + m;
            scanf(&quot;%d%*c%d&quot;, &amp;h, &amp;m);
            time[i][1] = h * 60 + m;
            gets(str);
        }
        time[n+1][0] = 18 * 60;
        time[n+1][1] = 24 * 60;
        n = n + 2;
        qsort(time, n, sizeof(time[0]), cmp);
        ans = 0;
        for(i = 1; i &lt;= n; ++i){
            if(ans &lt; time[i][0] - time[i - 1][1]){
                ans = time[i][0] - time[i - 1][1];
                maxtime = time[i - 1][1];
            }
        }
        printf(&quot;Day #%d: the longest nap starts at %.2d:%.2d and will last for &quot;, ++Case, maxtime / 60, maxtime % 60);
        if(ans &lt; 60)printf(&quot;%d minutes.\n&quot;, ans);
        else printf(&quot;%d hours and %d minutes.\n&quot;, ans / 60, ans % 60);
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