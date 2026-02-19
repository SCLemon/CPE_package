<!DOCTYPE html>
<html>
<head>
<title>uva706</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva706</h1>
<pre class="prettyprint">
//uva706
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;

using namespace std;

int head[]  ={1, 0, 1, 1, 0, 1, 1, 1, 1, 1};
int upperl[]={1, 0, 0, 0, 1, 1, 1, 0, 1, 1};
int upperr[]={1, 1, 1, 1, 1, 0, 0, 1, 1, 1};
int mid[]   ={0, 0, 1, 1, 1, 1, 1, 0, 1, 1};
int lowerl[]={1, 0, 1, 0, 0, 0, 1, 0, 1, 0};
int lowerr[]={1, 1, 0, 1, 1, 1, 1, 1, 1, 1};
int btm[]   ={1, 0, 1, 1, 0, 1, 1, 0, 1, 1};

int main() {
    int i, j, n, len;
    char s[10];
    int is[10];
    while(scanf(&quot;%d %s&quot;,&amp;n,s) == 2 &amp;&amp; n) {
        for(i = 0, len = strlen(s); i &lt; len; i++)
            is[i] = s[i] - &#39;0&#39;;

        for(i = 0; i &lt; len; i++) {
            if(i) printf(&quot; &quot;);
            printf(&quot; &quot;);
            for(j = 0; j &lt; n; j++)
                printf(&quot;%c&quot;, head[is[i]] == 1 ? &#39;-&#39; : &#39; &#39;);
            printf(&quot; &quot;);
        }
        printf(&quot;\n&quot;);
		
        for(int k = 0; k &lt; n; k++) {
            for(i = 0; i &lt; len; i++) {
                if(i) printf(&quot; &quot;);
                printf(&quot;%c&quot;, upperl[is[i]] == 1 ? &#39;|&#39; : &#39; &#39;);
                for(j = 0; j &lt; n; j++)
                    printf(&quot; &quot;);
                printf(&quot;%c&quot;, upperr[is[i]] == 1 ? &#39;|&#39; : &#39; &#39;);
            }
            printf(&quot;\n&quot;);
        }
		
        for(i = 0; i &lt; len; i++) {
            if(i) printf(&quot; &quot;);
            printf(&quot; &quot;);
            for(j = 0; j &lt; n; j++)
                printf(&quot;%c&quot;, mid[is[i]] == 1 ? &#39;-&#39; : &#39; &#39;);
            printf(&quot; &quot;);
        }
        printf(&quot;\n&quot;);
		
        for(int k = 0; k &lt; n; k++) {
            for(i = 0; i &lt; len; i++) {
                if(i) printf(&quot; &quot;);
                printf(&quot;%c&quot;, lowerl[is[i]] == 1 ? &#39;|&#39; : &#39; &#39;);
                for(j = 0; j &lt; n; j++)
                    printf(&quot; &quot;);
                printf(&quot;%c&quot;, lowerr[is[i]] == 1 ? &#39;|&#39; : &#39; &#39;);
            }
            printf(&quot;\n&quot;);
        }
		
        for(i = 0; i &lt; len; i++) {
            if(i) printf(&quot; &quot;);
            printf(&quot; &quot;);
            for(j = 0; j &lt; n; j++)
                printf(&quot;%c&quot;, btm[is[i]] == 1 ? &#39;-&#39; : &#39; &#39;);
            printf(&quot; &quot;);
        }
        printf(&quot;\n\n&quot;);
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