<!DOCTYPE html>
<html>
<head>
<title>uva10336</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10336</h1>
<pre class="prettyprint">
//uva10336
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;string&gt;

using namespace std;

void dfs(const vector&lt;string&gt;&amp; world, vector&lt;vector&lt;bool&gt;&gt;&amp; ifvisited,
         const int&amp; i, const int&amp; j);

int main() {
    int N = 0;

    cin &gt;&gt; N;
    for (int i = 0; i &lt; N; i++) {  // N case
        int H = 0, W = 0, max = -1;
        vector&lt;int&gt; count(26, 0);
        vector&lt;string&gt; world;
        vector&lt;vector&lt;bool&gt;&gt; ifvisited;

        cin &gt;&gt; H &gt;&gt; W;
        world.push_back(string(W + 2, &#39; &#39;));
        for (int j = 0; j &lt; H; j++) {
            string input;

            cin &gt;&gt; input;
            world.push_back(&#39; &#39; + input + &#39; &#39;);
        }
        world.push_back(string(W + 2, &#39; &#39;));
        ifvisited.assign(H + 2, vector&lt;bool&gt;(W + 2, false));

        // for (auto j : world) cout &lt;&lt; j &lt;&lt; endl;

        for (int j = 1; j &lt;= H; j++) {
            for (int k = 1; k &lt;= W; k++) {
                if (!ifvisited[j][k]) {
                    if (max &lt; ++count[world[j][k] - &#39;a&#39;])
                        max = count[world[j][k] - &#39;a&#39;];

                    dfs(world, ifvisited, j, k);
                }
            }
        }

        cout &lt;&lt; &quot;World #&quot; &lt;&lt; i + 1 &lt;&lt; endl;
        for (int j = max; j &gt;= 1; j--) {
            for (int k = 0; k &lt; 26; k++) {
                if (count[k] == j) {
                    cout &lt;&lt; static_cast&lt;char&gt;(k + &#39;a&#39;) &lt;&lt; &quot;: &quot; &lt;&lt; count[k]
                         &lt;&lt; endl;
                }
            }
        }
    }
    return 0;
}

void dfs(const vector&lt;string&gt;&amp; world, vector&lt;vector&lt;bool&gt;&gt;&amp; ifvisited,
         const int&amp; i, const int&amp; j) {
    ifvisited[i][j] = true;

    if (world[i + 1][j] == world[i][j] &amp;&amp; !ifvisited[i + 1][j]) {
        dfs(world, ifvisited, i + 1, j);
    }
    if (world[i][j + 1] == world[i][j] &amp;&amp; !ifvisited[i][j + 1]) {
        dfs(world, ifvisited, i, j + 1);
    }
    if (world[i - 1][j] == world[i][j] &amp;&amp; !ifvisited[i - 1][j]) {
        dfs(world, ifvisited, i - 1, j);
    }
    if (world[i][j - 1] == world[i][j] &amp;&amp; !ifvisited[i][j - 1]) {
        dfs(world, ifvisited, i, j - 1);
    }
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