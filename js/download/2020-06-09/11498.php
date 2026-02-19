<!DOCTYPE html>
<html>
<head>
<title>uva11498</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11498</h1>
<pre class="prettyprint">
//uva11498
#include &lt;bits/stdc++.h&gt;

using namespace std;

int main() {
    int cas, n, m, x, y;

    while (scanf(&quot;%d&quot;, &amp;cas) &amp;&amp; cas) {
        scanf(&quot;%d %d&quot;, &amp;n, &amp;m);
        for (int i = 0; i&lt;cas; i++) {
            scanf(&quot;%d %d&quot;, &amp;x, &amp;y);
            if (x == n || y == m)
                printf(&quot;divisa\n&quot;);
            else if (x&gt;n &amp;&amp; y&lt;m)
                printf(&quot;SE\n&quot;);
            else if (x&gt;n &amp;&amp; y&gt;m)
                printf(&quot;NE\n&quot;);
            else if (x&lt;n &amp;&amp; y&lt;m)
                printf(&quot;SO\n&quot;);
            else if (x&lt;n &amp;&amp; y&gt;m)
                printf(&quot;NO\n&quot;);
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