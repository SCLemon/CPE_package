<!DOCTYPE html>
<html>
<head>
<title>uva12959</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12959</h1>
<pre class="prettyprint">
//uva12959
#include &lt;iostream&gt;
using namespace std;

int main() {
    int J, R;
    while (cin &gt;&gt; J &gt;&gt; R &amp;&amp; J &amp;&amp; R) {
        // int vp[J] = {0};
        int vp[512] = {0};
        int winner = 0;
        int tmp = 0;
        for (int i = 0; i &lt; J * R; ++i) {
            cin &gt;&gt; tmp;
            int cur = i % J;
            vp[cur] += tmp;
            if (vp[cur] &gt;= vp[winner])
                winner = cur;
        }
        cout &lt;&lt; winner + 1 &lt;&lt; endl;
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