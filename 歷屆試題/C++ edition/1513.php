<!DOCTYPE html>
<html>
<head>
<title>uva1513</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1513</h1>
<pre class="prettyprint">
//uva1513
/// fake segment tree
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;
#define MAXNODE 524287
#define BASE 262144
/// 2^18 = 262144
/// 2^19 = 524288

using namespace std;

int N, M, q, base, nxtp, curp, newp, cnt;
int n[530000];
int p[100005];

void solve() {
    nxtp = BASE + N; /// index of the empty leftmost leaf node

    memset(n, 0, sizeof(n));
    /// initial leaf node
    for (int i = 0; i &lt; N; i++)
        n[BASE + i] = 1;
    /// initial internal node
    for (int i = BASE - 1; i &gt;= 1; i--)
        n[i] = n[i * 2] + n[i * 2 + 1];
    /// initial place
    for (int i = N; i &gt;= 1; i--)
        p[i] = BASE + (N - i);

    for (int i = 0; i &lt; M; i++, nxtp++) {
        scanf(&quot;%d&quot;, &amp;q);
        /// query(q,infinite)
        cnt = 0;
        int l = p[q], r = MAXNODE;
        for (; l^r^1; l &gt;&gt;= 1, r &gt;&gt;= 1) {
            if(!(l &amp; 1))
                cnt += n[l + 1];
            if (r &amp; 1)
                cnt += n[r - 1];
        }

        if (i != 0) printf(&quot; &quot;);
        printf(&quot;%d&quot;, cnt);

        /// remove(q)
        curp = p[q];
        while(curp != 0) {
            --n[curp];
            curp /= 2;
        }
        /// update(q)
        p[q] = newp = nxtp;
        while(newp != 0) {
            ++n[newp];
            newp /= 2;
        }
    }
    printf(&quot;\n&quot;);
}

int main() {
    int t;
    scanf(&quot;%d&quot;, &amp;t);
    for (int i = 0; i &lt; t; i++) {
        scanf(&quot;%d%d&quot;, &amp;N, &amp;M);
        solve();
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