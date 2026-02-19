<!DOCTYPE html>
<html>
<head>
<title>uva11455</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11455</h1>
<pre class="prettyprint">
//uva11455
#include &lt;stdio.h&gt;
#include &lt;algorithm&gt;
using namespace std;

int main(void) {

    int TC, edge[4], i, quad;
    scanf(&quot;%d&quot;, &amp;TC);
    while (TC--) {
        for (i = 0; i &lt; 4; i++)
            scanf(&quot;%d&quot;, edge + i);
        sort(edge, edge + 4);

        if (edge[0] == edge[1] &amp;&amp; edge[1] == edge[2] &amp;&amp; edge[2] == edge[3])
            printf(&quot;square\n&quot;);
        else if (edge[0] == edge[1] &amp;&amp; edge[2]==edge[3])
            printf(&quot;rectangle\n&quot;);
        else if (edge[0] + edge[1] + edge[2] &gt; edge[3])
            printf(&quot;quadrangle\n&quot;);
        else
            printf(&quot;banana\n&quot;);
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