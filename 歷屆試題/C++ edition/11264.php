<!DOCTYPE html>
<html>
<head>
<title>uva11264</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11264</h1>
<pre class="prettyprint">
//uva11264
#include &lt;cstdio&gt;
#include &lt;iostream&gt;

using namespace std;

int T, n, c[1005];

int solve() {
    int cur = c[0], ans = 2; /// c[0] and c[n-1] must choose
    for (int i = 1; i &lt; n-1; ++i) {
        if (cur &lt; c[i] &amp;&amp; cur + c[i] &lt; c[i+1]) {
            cur += c[i];
            ++ans;
        }
    }
    return ans;
}

int main() {
    scanf(&quot;%d&quot;,&amp;T);
    for (int t = 0; t &lt; T; ++t) {
        scanf(&quot;%d&quot;, &amp;n);
        for (int i = 0; i &lt; n; ++i)
            scanf(&quot;%d&quot;, &amp;c[i]);
        printf(&quot;%d\n&quot;, solve());
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