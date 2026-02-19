<!DOCTYPE html>
<html>
<head>
<title>uva10903</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10903</h1>
<pre class="prettyprint">
//uva10903
#include &lt;cstdio&gt;
#include &lt;string&gt;
#include &lt;iostream&gt;
#define WIN 0
#define LOSE 1
using namespace std;

int main() {
    int n, k;
    int state[105][2];
    int p1, p2;
    string m1, m2;
    bool space = false;

    while (scanf(&quot;%d&quot;, &amp;n) != EOF &amp;&amp; n != 0) {
        scanf(&quot;%d&quot;, &amp;k);
        if (space) printf(&quot;\n&quot;);
        space = true;
        memset(state, 0, sizeof(state));
        for (int i = 0; i &lt; k * n * (n - 1) / 2; i++) {
            scanf(&quot;%d&quot;, &amp;p1);
            cin &gt;&gt; m1;
            scanf(&quot;%d&quot;, &amp;p2);
            cin &gt;&gt; m2;
            if (m1[0] != m2[0]) {
                if (m1[0] == &#39;r&#39; &amp;&amp; m2[0] == &#39;s&#39; || m1[0] == &#39;s&#39; &amp;&amp; m2[0] == &#39;p&#39; || m1[0] == &#39;p&#39; &amp;&amp; m2[0] == &#39;r&#39;) {
                    state[p1][WIN]++;
                    state[p2][LOSE]++;
                } else {
                    state[p1][LOSE]++;
                    state[p2][WIN]++;
                }
            }
        }
        for (int i = 1; i &lt;= n; i++) {
            if (state[i][WIN] + state[i][LOSE] == 0) {
                printf(&quot;-\n&quot;);
            } else {
                printf(&quot;%.3lf\n&quot;, (double)state[i][WIN] / (double)(state[i][WIN] + state[i][LOSE]));
            }
        }
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