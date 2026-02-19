<!DOCTYPE html>
<html>
<head>
<title>uva10603</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10603</h1>
<pre class="prettyprint">
//uva10603
#include&lt;iostream&gt;
#include&lt;queue&gt;
#include&lt;cstdio&gt;
#include&lt;algorithm&gt;
#include&lt;limits.h&gt;
using namespace std;
int A, B, C, D;
int water[201][201], ans[201];
queue&lt;int&gt; queuea, queueb, queuec, queuetotal;

void pushnode(int a, int b, int c, int total){
    queuea.push(a), queueb.push(b), queuec.push(c), queuetotal.push(total);
}

void update(int a, int b, int c, int total){
    if (total &gt;= ans[D]) return;
    if (total &gt;= water[a][b]) return;
    water[a][b] = total;
    ans[a] = min(ans[a], total);
    ans[b] = min(ans[b], total);
    ans[c] = min(ans[c], total);
    if (a &lt;= C - c)
        pushnode(0, b, c+a, total+a);
    else
        pushnode(a-C+c, b, C, total+C-c);
    if (a &lt;= B - b)
        pushnode(0, b+a, c, total+a);
    else
        pushnode(a-B+b, B, c, total+B-b);
    if (b &lt;= C - c)
        pushnode(a, 0, c+b, total+b);
    else
        pushnode(a, b-C+c, C, total+C-c);
    if (b &lt;= A - a)
        pushnode(a+b, 0, c, total+b);
    else
        pushnode(A, b-A+a, c, total+A-a);
    if (c &lt;= A - a)
        pushnode(a+c, b, 0, total+c);
    else
        pushnode(A, b, c-A+a, total+A-a);
    if (c &lt;= B - b)
        pushnode(a, b+c, 0, total+c);
    else
        pushnode(a, B, c-B+b, total+B-b);
}

void bfs(int a, int b, int c, int total){
    pushnode(a, b, c, total);
    while (!queuea.empty()){
        a = queuea.front(),queuea.pop();
        b = queueb.front(),queueb.pop();
        c = queuec.front(),queuec.pop();
        total = queuetotal.front(),queuetotal.pop();
        update(a, b, c, total);
    }
}

main(){
    int n, i, j, k;

    scanf(&quot;%d&quot;,&amp;n);
    while (n--){
            scanf(&quot;%d%d%d%d&quot;, &amp;A, &amp;B, &amp;C, &amp;D);
            for (i = 0; i &lt;= A; i++)
                for (j = 0; j &lt;= B; j++)
                    water[i][j] = INT_MAX;
            for (i = 0; i &lt;= D; i++)
                ans[i] = INT_MAX;
            bfs(0, 0, C, 0);
            for (i = D; ans[i] == INT_MAX ; i--);
            printf(&quot;%d %d\n&quot;, ans[i], i);
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