<!DOCTYPE html>
<html>
<head>
<title>uva12223</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12223</h1>
<pre class="prettyprint">
//uva12223
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;vector&gt;
#include &lt;iostream&gt;
#define MAX 50005
#define INF (1LL&lt;&lt;60)

using namespace std;

typedef long long ll;

class Edge{
public:
    int s;
    ll d;
    Edge(int _s, ll _d): s(_s), d(_d) {}
};

typedef vector&lt;Edge&gt; VE;

int c, n, m, a, b;
ll t, f;
VE e[MAX]; /// edge info for each subway
ll cnt[MAX]; /// times to travel for each subway
ll totcnt[MAX], sumcnt;
bool vis[MAX];
ll dp[MAX], ans;

ll dfs1(int cur) {
    for (int i = 0; i &lt; e[cur].size(); ++i) {
        Edge next = e[cur][i];
        if (vis[next.s] == false) {
            vis[next.s] = true;
            ll subtotcnt = dfs1(next.s);
            dp[0] += 2 * subtotcnt * next.d;
            totcnt[cur] += subtotcnt;
        }
    }
    return totcnt[cur];
}

void dfs2(int cur) {
    for (int i = 0; i &lt; e[cur].size(); ++i) {
        Edge next = e[cur][i];
        if (vis[next.s] == false) {
            vis[next.s] = true;
            dp[next.s] = dp[cur] + (sumcnt - 2 * totcnt[next.s]) * 2 * next.d;
            ans = min(ans, dp[next.s]);
            dfs2(next.s);
        }
    }
}

int main() {
    scanf(&quot;%d&quot;, &amp;c);
    for (int ccnt = 0; ccnt &lt; c; ++ccnt) {
        scanf(&quot;%d&quot;, &amp;n); /// 0 ~ n-1
        for (int i = 0; i &lt; MAX; ++i)
            e[i].clear();
        for (int i = 1; i &lt;= n - 1; ++i) {
            scanf(&quot;%d%d%lld&quot;, &amp;a, &amp;b, &amp;t);
            e[a - 1].push_back(Edge(b - 1, t));
            e[b - 1].push_back(Edge(a - 1, t));
        }

        scanf(&quot;%d&quot;, &amp;m);
        sumcnt = 0;
        memset(cnt, 0, sizeof(cnt));
        memset(totcnt, 0, sizeof(totcnt));
        for (int i = 1; i &lt;= m; ++i) {
            scanf(&quot;%d%lld&quot;, &amp;a, &amp;f);
            totcnt[a - 1] = cnt[a - 1] = f;
            sumcnt += f;
        }
        memset(vis, false, sizeof(vis));
        dp[0] = 0;
        vis[0] = true;
        dfs1(0); /// start from subway 0

        memset(vis, false, sizeof(vis));
        vis[0] = true;
        ans = dp[0];
        dfs2(0);

        /// output
        int pflag = false;
        printf(&quot;%lld\n&quot;,ans);
        for (int i = 0; i &lt; n; ++i) {
            if(dp[i] == ans) {
                if(pflag == true)
                    printf(&quot; &quot;);
                pflag = true;
                printf(&quot;%d&quot;, i + 1);
            }
        }
        printf(&quot;\n&quot;);
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