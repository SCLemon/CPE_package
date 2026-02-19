<!DOCTYPE html>
<html>
<head>
<title>uva11636</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11636</h1>
<pre class="prettyprint">
//uva11636
#include&lt;cstdio&gt;

int main()
{
    int a[20] = {0}, cas = 1, n;

    a[0] = 1, a[1] = 2;
    for (int i = 2; i&lt;20; i++)
        a[i] = a[i-1]*2;

    while (scanf(&quot;%d&quot;, &amp;n) &amp;&amp; n &gt;= 0){
        for (int i = 0; i&lt;20; i++){
            if (n &lt;= a[i]){
                printf(&quot;Case %d: %d\n&quot;, cas, i);
                break;
            }
        }
        cas++;
    }
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