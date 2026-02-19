<!DOCTYPE html>
<html>
<head>
<title>uva11067</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11067</h1>
<pre class="prettyprint">
//uva11067
#include&lt;iostream&gt;
#include&lt;stdio.h&gt;

using namespace std;

int main() {
    int w = 0, h = 0, n = 0, wx = 0, wy = 0;
    long long path[101][101];
    while (scanf(&quot;%d %d&quot;, &amp;w, &amp;h) == 2) {
        if (w == 0 &amp;&amp; h == 0)
            break;
        for (int i = 0; i &lt;= h; i++)
            for (int j = 0; j &lt;= w; j++)
                path[i][j] = 0;
        cin &gt;&gt; n;
        for (int i = 0; i &lt; n; i++) {
            cin &gt;&gt; wx &gt;&gt; wy;
            path[wy][wx] = -1;
        }
        for (int i = 0; i &lt;= h; i++)
            for (int j = 0; j &lt;= w; j++) {
                if (path[i][j] == -1)
                    path[i][j] = 0;
                else {
                    if (i == 0 &amp;&amp; j == 0)
                        path[0][0] = 1;
                    else if (i == 0)
                        path[i][j] = path[i][j - 1];
                    else if (j == 0)
                        path[i][j] = path[i - 1][j];
                    else
                        path[i][j] = path[i - 1][j] + path[i][j - 1];
                }
            }
        if (path[h][w] == 0)
            cout &lt;&lt; &quot;There is no path.\n&quot;;
        else if (path[h][w] == 1)
            cout &lt;&lt; &quot;There is one path from Little Red Riding Hood&#39;s house to her grandmother&#39;s house.\n&quot;;
        else
            cout &lt;&lt; &quot;There are &quot; &lt;&lt; path[h][w] &lt;&lt; &quot; paths from Little Red Riding Hood&#39;s house to her grandmother&#39;s house.\n&quot;;
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