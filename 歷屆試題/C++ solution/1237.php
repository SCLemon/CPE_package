<!DOCTYPE html>
<html>
<head>
<title>uva1237</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1237</h1>
<pre class="prettyprint">
//uva1237
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
int main() {
    int n;
    scanf(&quot;%d&quot;, &amp;n);
    while (n--) {
        int k, m, p, i;
        int data1[10000], data2[10000];
        char name[10000][25];
        scanf(&quot;%d&quot;, &amp;k);
        for (i = 0; i &lt; k; i++)
            scanf(&quot;%s %d %d&quot;, name[i], &amp;data1[i], &amp;data2[i]);
        scanf(&quot;%d&quot;, &amp;m);
        while (m--) {
            scanf(&quot;%d&quot;, &amp;p);
            int temp = 0, key;
            for(i = 0; i &lt; k; i++) {
                if(data1[i] &lt;= p &amp;&amp; p &lt;= data2[i])
                    temp++, key = i;
                if(temp &gt; 1) break;
            }
            if (temp == 1)
                printf(&quot;%s\n&quot;,name[key]);
            else
                printf(&quot;UNDETERMINED\n&quot;);
        }
        if(n)
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