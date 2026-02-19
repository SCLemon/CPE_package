<!DOCTYPE html>
<html>
<head>
<title>uva10142</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10142</h1>
<pre class="prettyprint">
//uva10142
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
//must use c++11

char can[21][500], tmp[500];
int v[1001][25], score[25], fire[25], ans, firepeople;
int tc, n, i, j, p, print = 0;
int main(void){
    scanf(&quot;%d&quot;, &amp;tc);
    while (tc--){
        memset(v, 0, sizeof(v));
        memset(fire, 0, sizeof(fire));
        memset(score, 0, sizeof(score));
        memset(can, 0, sizeof(can));
        memset(tmp, 0, sizeof(tmp));
        ans = -1;
        firepeople = 0;
        scanf(&quot;%d&quot;, &amp;n);
        gets(can[0]);
        for(i = 0; i &lt; n; i++)
            gets(can[i]);
        p = 0;//how many people vote
        while (gets(tmp)){
            if(!strcmp(tmp, &quot;&quot;))
                break;
            char *t;
            int a;
            j = 0;
            t = strtok(tmp, &quot; &quot;);
            while(t != NULL){
                a = atoi(t);
                v[p][j++] = a;
                t = strtok(NULL,&quot; &quot;);
            }
            p++;
        }
        while (ans + ans &lt;= p &amp;&amp; firepeople &lt; n){
            int mi = 0, ma = 0;
            memset(score, 0, sizeof(score));
            for (i = 0; i &lt; p; i++){
                for(j = 0; j &lt; n; j++)
                    if(!fire[v[i][j]]){
                        score[v[i][j]]++;
                        break;
                    }
            }
            int t = 0;
            for (i = 1; i &lt;= n; i++)
                if (score[i] &gt; t)
                    t = score[i];
            ans = t;
            if( ans + ans &gt; p)
                break;
            else {
                for (i = 1; i &lt;= n; i++)
                    if (score[i]){
                        if (!mi)
                            mi = i;
                        else if (score[mi] &gt; score[i])
                            mi = i;
                        if(score[ma] &lt; score[i])
                            ma = i;
                    }
                for (i = 1; i &lt;= n; i++)
                    if (score[i] == score[mi]){
                        fire[i] = 1;
                        firepeople++;
                    }
            }
            if (score[ma] == score[mi])
                break;
        }
        if (print)
            printf(&quot;\n&quot;);

        for (i = 1; i &lt;= n; i++)
                if (score[i] == ans)
                    printf(&quot;%s\n&quot;, can[i - 1]);
        print = 1;
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