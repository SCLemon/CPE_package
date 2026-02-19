<!DOCTYPE html>
<html>
<head>
<title>uva579</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva579</h1>
<pre class="prettyprint">
//uva579
#include &lt;cstdio&gt;
#include &lt;iostream&gt;

using namespace std;

int main() {
    int h, m;
    double ah, am, ans; // angle of hour and min
    while (scanf(&quot;%d:%d&quot;, &amp;h, &amp;m) &amp;&amp; (h | m)) {
        if (h == 12) h = 0;
        ah = h * 30 + 30 * m * 1.0 / 60;
        am = m * 6;
        ans = ah - am;
        while (ans &lt; 0) ans += 360;
        if (ans &gt; 180) ans = 360 - ans;
        printf(&quot;%.3lf\n&quot;, ans);
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