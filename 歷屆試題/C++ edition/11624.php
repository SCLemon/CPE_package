<!DOCTYPE html>
<html>
<head>
<title>uva11624</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11624</h1>
<pre class="prettyprint">
//uva11624
#include &lt;stdio.h&gt;
#include &lt;queue&gt;
using namespace std;
char g[1010][1010];
int F[1010][1010], J[1010][1010];
int n, m, dir[4][2] = {{1,0},{0,1},{-1,0},{0,-1}};
struct pt {
    int x, y;
};
pt pf, pj;
queue&lt;pt&gt; Q;
void sol() {
    int i, j;
    while(!Q.empty())   Q.pop();
    pt tn, tx;
    for(i = 0; i &lt; n; i++)
        for(j = 0; j &lt; m; j++)
            if(g[i][j] == &#39;F&#39;) {
                pf.x = i, pf.y = j;
                Q.push(pf);
                F[pf.x][pf.y] = 1;
            }
    while(!Q.empty()) {
        tn = Q.front();
        Q.pop();
        for(i = 0; i &lt; 4; i++) {
            tx.x = tn.x+dir[i][0];
            tx.y = tn.y+dir[i][1];
            if(tx.x &lt; 0 || tx.x &gt;= n || tx.y &lt; 0 || tx.y &gt;= m)
                continue;
            if(g[tx.x][tx.y] == &#39;#&#39;)
                continue;
            if(F[tx.x][tx.y] == 0) {
                F[tx.x][tx.y] = F[tn.x][tn.y]+1;
                Q.push(tx);
            }
        }
    }
    Q.push(pj), J[pj.x][pj.y] = 1;
    while(!Q.empty()) {
        tn = Q.front();
        Q.pop();
        if(tn.x == 0 || tn.y == 0 || tn.x == n-1 || tn.y == m-1) {
            printf(&quot;%d\n&quot;, J[tn.x][tn.y]);
            return;
        }
        for(i = 0; i &lt; 4; i++) {
            tx.x = tn.x+dir[i][0];
            tx.y = tn.y+dir[i][1];
            if(tx.x &lt; 0 || tx.x &gt;= n || tx.y &lt; 0 || tx.y &gt;= m)
                continue;
            if(g[tx.x][tx.y] == &#39;#&#39;)
                continue;
            if(J[tx.x][tx.y] == 0 &amp;&amp; (J[tn.x][tn.y]+1 &lt; F[tx.x][tx.y] || F[tx.x][tx.y] == 0)) {
                J[tx.x][tx.y] = J[tn.x][tn.y]+1;
                Q.push(tx);
            }
        }
    }
    puts(&quot;IMPOSSIBLE&quot;);
}
int main() {
    int t, i, j;
    scanf(&quot;%d&quot;, &amp;t);
    while(t--) {
        scanf(&quot;%d %d&quot;, &amp;n, &amp;m);
        for(i = 0; i &lt; n; i++) {
            scanf(&quot;%s&quot;, g[i]);
            for(j = 0; j &lt; m; j++) {
                if(g[i][j] == &#39;J&#39;)
                    pj.x = i, pj.y = j;
                F[i][j] = 0, J[i][j] = 0;
            }
        }
        sol();
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