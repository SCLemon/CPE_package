<!DOCTYPE html>
<html>
<head>
<title>uva10583</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10583</h1>
<pre class="prettyprint">
//uva10583
#include &lt;bits/stdc++.h&gt;
using namespace std;

#define MXN 50005
int N, M;
vector&lt;int&gt; G[MXN];
bool vis[MXN];

void dfs(int u)
{
    vis[u] = 1;
    for( int v : G[u] )
    {
        if( !vis[v] )
        {
            dfs(v);
        }
    }
}

int main()
{
    ios::sync_with_stdio(0);

    int tc = 0;
    while(cin&gt;&gt;N&gt;&gt;M &amp;&amp; (N||M))
    {
        tc++;
        for( int i = 1; i &lt;= N; i++ )
        {
            vis[i] = 0;
            G[i].clear();
        }
        int u, v;
        for( int i = 1; i &lt;= M; i++ )
        {
            cin&gt;&gt;u&gt;&gt;v;
            G[u].push_back(v);
            G[v].push_back(u);
        }
        int C = 0;
        for( int i = 1; i &lt;= N; i++ )
        {
            if( !vis[i] )
            {
                C++;
                dfs(i);
            }
        }
        cout&lt;&lt;&quot;Case &quot;&lt;&lt;tc&lt;&lt;&quot;: &quot;&lt;&lt;C&lt;&lt;&#39;\n&#39;;
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