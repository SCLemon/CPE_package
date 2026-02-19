<!DOCTYPE html>
<html>
<head>
<title>uva13185</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva13185</h1>
<pre class="prettyprint">
//uva13185
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
using namespace std;

int main(void){
    int n, t, s, i;
    scanf(&quot;%d&quot;, &amp;n);
    while (n--){
        scanf(&quot;%d&quot;, &amp;t);
        s = 0;
        for (i = 1; i &lt; t; i++){
            if(t % i == 0)
                s = s + i;
        }
        if( s &lt; t)
            printf(&quot;deficient\n&quot;);
        else if (s == t)
            printf(&quot;perfect\n&quot;);
        else
            printf(&quot;abundant\n&quot;);
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