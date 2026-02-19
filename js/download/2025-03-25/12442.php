<!DOCTYPE html>
<html>
<head>
<title>uva12442</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12442</h1>
<pre class="prettyprint">
//uva12442
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

vector&lt;int&gt; sent;
vector&lt;bool&gt; check, sum;
int times;

void dfs(int num) {
    ++times;
    sum[num] = check[num] = true;
    if (!check[sent[num]]) dfs(sent[num]);
}

int main() {
    int kase, n;
    cin &gt;&gt; kase;

    for (int i = 0; i &lt; kase; ++i) {
        cin &gt;&gt; n;
        sent.assign(n + 1, -1);
        sum.assign(n + 1, false);

        for (int j = 0, a, b; j &lt; n; ++j) cin &gt;&gt; a &gt;&gt; b, sent[a] = b;

        int ftimes = 1;
        int fnum = sent[0];

        for (int j = 1; j &lt;= n; ++j)
            if (!sum[j]) {
                check.assign(n + 1, false);
                check[j] = true;
                times = 1;

                dfs(sent[j]);

                if (times &gt; ftimes || (times == ftimes &amp;&amp; j &lt; fnum))
                    fnum = j, ftimes = times;
            }

        cout &lt;&lt; &quot;Case &quot; &lt;&lt; i + 1 &lt;&lt; &quot;: &quot; &lt;&lt; fnum &lt;&lt; &quot;\n&quot;;
    }
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