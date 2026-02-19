<!DOCTYPE html>
<html>
<head>
<title>uva1225</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1225</h1>
<pre class="prettyprint">
//uva1225
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
int digi[10];
int main(void){
    int N, input, i, a, b;
    scanf(&quot;%d&quot;, &amp;N);
    while (N--){
        memset(digi, 0, sizeof(digi));
        scanf(&quot;%d&quot;, &amp;input);
        for(i = 1; i &lt;= input; i++){
            a=i;
            while(a)
            {
                digi[a%10]++;
                a=a/10;
            }
        }
        printf(&quot;%d&quot;, digi[0]);
        for(i = 1; i &lt; 10; i++)
            printf(&quot; %d&quot;, digi[i]);
        printf(&quot;\n&quot;);
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