<!DOCTYPE html>
<html>
<head>
<title>uva10242</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10242</h1>
<pre class="prettyprint">
//uva10242
#include &lt;stdio.h&gt;
#include &lt;algorithm&gt;
#include &lt;string.h&gt;

using namespace std;

int main(void) {
    double x1, y1, x2, y2, x3, y3, x4, y4;

    while(scanf(&quot;%lf %lf %lf %lf %lf %lf %lf %lf&quot;, &amp;x1, &amp;y1, &amp;x2, &amp;y2, &amp;x3, &amp;y3, &amp;x4, &amp;y4)!= EOF) {
        if(x1 == x3 &amp;&amp; y1 == y3)
            printf(&quot;%.3lf %.3lf\n&quot;, (x2 + x4) - x1, (y2 + y4) - y1);
        else if(x1 == x4 &amp;&amp; y1 == y4)
            printf(&quot;%.3lf %.3lf\n&quot;, (x2 + x3) - x1, (y2 + y3) - y1);
        else if(x2 == x3 &amp;&amp; y2 == y3)
            printf(&quot;%.3lf %.3lf\n&quot;, (x1 + x4) - x2, (y1 + y4) - y2);
        else
            printf(&quot;%.3lf %.3lf\n&quot;, (x1 + x3) - x2, (y1 + y3) - y2);
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