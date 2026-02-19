<!DOCTYPE html>
<html>
<head>
<title>uva514</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva514</h1>
<pre class="prettyprint">
//uva514
#include &lt;stdio.h&gt;
#include &lt;algorithm&gt;
#include &lt;stack&gt;
using namespace std;

int main(void){
    int n, i, j, a[1001], prt = 0;
    while (scanf(&quot;%d&quot;, &amp;n) &amp;&amp; n){
        while (scanf(&quot;%d&quot;, &amp;a[0]) &amp;&amp; a[0]){
            if (a[0] == 0)
                continue;
            for (i = 1; i &lt; n; i++)
                scanf(&quot;%d&quot;, &amp;a[i]);
            j = 0;
            stack&lt;int&gt; S;
            for (i = 1; i &lt;= n; i++){
                if (a[j] == i)
                    j++;
                else if (!S.empty() &amp;&amp; S.top() == a[j]) {
                        j++;
                        S.pop();
                }
                else
                    S.push(i);

                while (!S.empty() &amp;&amp; S.top() == a[j]){
                    j++;
                    S.pop();
                }
            }

            if (S.empty() &amp;&amp; j == n)
                printf(&quot;Yes\n&quot;);
            else
                printf(&quot;No\n&quot;);
        }
        printf(&quot;\n&quot;);
    }
    return 0;
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->