<!DOCTYPE html>
<html>
<head>
<title>uva378</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva378</h1>
<pre class="prettyprint">
//uva378
#include &lt;stdio.h&gt;

struct Point {
    int x, y;
};

struct Segment {
    Point s, e;
};

void solve(Segment a, Segment b) {
    int a1, b1, c1, a2, b2, c2;
    int D, Dx, Dy;
    a1 = a.s.y - a.e.y, b1 = -a.s.x + a.e.x;
    a2 = b.s.y - b.e.y, b2 = -b.s.x + b.e.x;
    c1 = a1 * a.s.x + b1 * a.s.y;
    c2 = a2 * b.s.x + b2 * b.s.y;
    D = a1 * b2 - a2 * b1;
    Dx = c1 * b2 - c2 * b1;
    Dy = a1 * c2 - a2 * c1;
    if(!D &amp;&amp; (Dx || Dy))
        puts(&quot;NONE&quot;);
    else if(!D &amp;&amp; !Dx &amp;&amp; !Dy)
        puts(&quot;LINE&quot;);
    else
        printf(&quot;POINT %.2lf %.2lf\n&quot;, (double)Dx / D, (double)Dy / D);
}

int main() {
    int t;
    scanf(&quot;%d&quot;, &amp;t);
    puts(&quot;INTERSECTING LINES OUTPUT&quot;);
    while(t--) {
        Segment a, b;
        scanf(&quot;%d %d %d %d&quot;, &amp;a.s.x, &amp;a.s.y, &amp;a.e.x, &amp;a.e.y);
        scanf(&quot;%d %d %d %d&quot;, &amp;b.s.x, &amp;b.s.y, &amp;b.e.x, &amp;b.e.y);
        solve(a, b);
    }
    puts(&quot;END OF OUTPUT&quot;);
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