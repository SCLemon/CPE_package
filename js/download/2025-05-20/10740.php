<!DOCTYPE html>
<html>
<head>
<title>uva10740</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10740</h1>
<pre class="prettyprint">
//uva10740
#include &lt;iostream&gt;
#include &lt;queue&gt;
#include &lt;vector&gt;
#include &lt;functional&gt;
using namespace std;
#define ll long long

int main() {
    int n, m;
    while (cin &gt;&gt; n &gt;&gt; m, n) {
        int x, y, k;
        cin &gt;&gt; x &gt;&gt; y &gt;&gt; k;

        vector&lt;vector&lt;pair&lt;int, int&gt;&gt;&gt; adj(n + 1);
        for (int i = 0; i &lt; m; i++) {
            int u, v, w;
            cin &gt;&gt; u &gt;&gt; v &gt;&gt; w;
            adj[u].emplace_back(v, w);
        }

        vector&lt;int&gt; cnt(n + 1, 0);
        priority_queue&lt;pair&lt;ll, int&gt;, vector&lt;pair&lt;ll, int&gt;&gt;, greater&lt;pair&lt;ll, int&gt;&gt;&gt; pq;
        pq.emplace(0LL, x);

        ll answer = -1;
        while (!pq.empty()) {
            pair&lt;ll, int&gt; temp = pq.top();
            ll d = temp.first;
            int u = temp.second;
            pq.pop();

            cnt[u]++;
            if (u == y &amp;&amp; cnt[u] == k) {
                answer = d;
                break;
            }
            if (cnt[u] &gt; k) continue;

            for (auto &amp;e : adj[u]) {
                int v = e.first, w = e.second;
                pq.emplace(d + w, v);
            }
        }

        cout &lt;&lt; answer &lt;&lt; &quot;\n&quot;;
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