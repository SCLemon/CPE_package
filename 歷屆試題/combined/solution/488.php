<!DOCTYPE html>
<html>
<head>
<title>uva488</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva488</h1>
<pre class="prettyprint">
//uva488
#include &lt;stdio.h&gt;

int main(void){
    int N, tc = 0, a, f, i, j, k;
    scanf(&quot;%d&quot;, &amp;N);
    while(N--){
        scanf(&quot;%d %d&quot;, &amp;a, &amp;f);
        for(i = 1; i &lt;= f; i++){
            if(tc++)
                printf(&quot;\n&quot;);
            for(j = 1; j &lt;= a; j++){
                for(k = 1; k &lt;= j; k++)
                    printf(&quot;%d&quot;, j);
                printf(&quot;\n&quot;);
            }
            for(j = a - 1; j &gt;= 1; j--){
                for(k = 1; k &lt;= j; k++)
                    printf(&quot;%d&quot;, j);
                printf(&quot;\n&quot;);
            }

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