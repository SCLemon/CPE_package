<!DOCTYPE html>
<html>
<head>
<title>uva12797</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12797</h1>
<pre class="prettyprint">
//uva12797
/// brute-force + bfs
#include &lt;cstdio&gt;
#include &lt;cstdlib&gt;
#include &lt;cstring&gt;
#include &lt;queue&gt;
#include &lt;iostream&gt;
#define INF (1&lt;&lt;30)

using namespace std;

char m[105][105];
bool vis[105][105];
bool p[256]; /// permission
int N, ans;
int dir[4][2] = {{0,1}, {1,0}, {0,-1}, {-1,0}};

class Pos{
public:
    int x, y, c;
    Pos() {}
    Pos(int _x, int _y, int _c = 1): x(_x), y(_y), c(_c) {}
    bool legal() { return (x &gt;= 1 &amp;&amp; x &lt;= N &amp;&amp; y &gt;= 1 &amp;&amp; y &lt;= N &amp;&amp; p[m[x][y]] == true &amp;&amp; vis[x][y] == false); }
};

bool finish(Pos cur) {
    return (cur.x == N &amp;&amp; cur.y == N);
}

void bfs() {
    if (p[m[1][1]] == false || p[m[N][N]] == false) /// no permission in begin or end.
        return;

    queue&lt;Pos&gt; myq;
    while(!myq.empty()) 
		myq.pop();
    Pos cur, nxt, goal;
    memset(vis, false, sizeof(vis));
    myq.push(Pos(1, 1, 1));
    vis[1][1] = true;

    while(!myq.empty()) {
        cur = myq.front(); 
        myq.pop();
        if (finish(cur) == true) {
            ans = min(ans, cur.c);
            return;
        }
        for (int i = 0; i &lt; 4; i++){
            nxt = Pos(cur.x + dir[i][0], cur.y + dir[i][1], cur.c + 1);
            if (nxt.legal() == true) {
                vis[nxt.x][nxt.y] = true;
                myq.push(nxt);
            }
        }
    }
}

void rec(int i) {
    if (i == 10)
        bfs();
    else {
        p[i + &#39;a&#39;] = true;
        rec(i + 1);
        p[i + &#39;a&#39;] = false;
        p[i + &#39;A&#39;] = true;
        rec(i + 1);
        p[i + &#39;A&#39;] = false;
    }
}

void solve() {
    memset(p,false,sizeof(p));
    rec(0); /// recursive to trace all permutation for 0~9 (a~j)
}

int main() {
    while(scanf(&quot;%d&quot;, &amp;N) == 1) {
        for (int i = 1; i &lt;= N; i++)
            scanf(&quot;%s&quot;, m[i] + 1);
        ans = INF;
        solve();
        printf(&quot;%d\n&quot;,ans == INF ? -1 : ans);
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