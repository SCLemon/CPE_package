<!DOCTYPE html>
<html>
<head>
<title>uva11747</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11747</h1>
<pre class="prettyprint">
//uva11747
#include &lt;iostream&gt;
#include &lt;string&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt;

using namespace std;

int MST[1000];

int find(int x){
    if (x == MST[x])
        return x;
    else {
        MST[x] = find(MST[x]);
        return MST[x];
    }
}

int main() {
    int n, m;
    while (scanf(&quot;%d%d&quot;, &amp;n, &amp;m)) {
        if (!m &amp;&amp; !n)
            break;

        int u[30000];
        int v[30000];
        int edge[30000];
        vector&lt;int&gt; Edge;
        vector&lt;int&gt; heav;

        for (int i = 0; i &lt; m; i++) {
            scanf(&quot;%d%d%d&quot;, &amp;u[i], &amp;v[i], &amp;edge[i]);
            Edge.push_back(edge[i]);
        }

        sort(edge, edge+m);
        for (int i = 0; i &lt; n; i++)
            MST[i] = i;

        for (int i = 0; i &lt; m; i++) {
            vector&lt;int&gt;::iterator itr = find(Edge.begin(), Edge.end(), edge[i]);
            int index = distance(Edge.begin(), itr);
            if (find(u[index]) != find(v[index]))
                MST[find(u[index])] = find(v[index]);

            else
                heav.push_back(edge[i]);
        }

        if (heav.empty())
            printf(&quot;forest\n&quot;);
        else {
            printf(&quot;%d&quot;, heav[0]);
            for (int i = 1; i &lt; heav.size(); i++)
                printf(&quot; %d&quot;,heav[i]);
            printf(&quot;\n&quot;);
        }
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