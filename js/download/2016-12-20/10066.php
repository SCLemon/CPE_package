<!DOCTYPE html>
<html>
<head>
<title>uva10066</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10066</h1>
<pre class="prettyprint">
//uva10066
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;

using namespace std;

int n, m;
int a[105], b[105];
int dp[105][105];


int main() {
    int tcnt = 0;
    while (scanf(&quot;%d%d&quot;, &amp;n, &amp;m) == 2 &amp;&amp; n &amp;&amp; m) {
        for (int i = 1 ; i &lt;= n ; i++)
            scanf(&quot;%d&quot;, &amp;a[i]);
        for (int i = 1 ; i &lt;= m ; i++)
            scanf(&quot;%d&quot;, &amp;b[i]);
        memset(dp, 0, sizeof(dp));
        for (int i = 1; i &lt;= n; i++) {
            for (int j = 1; j &lt;= m; j++) {
                if (a[i] == b[j])
                    dp[i][j] = dp[i - 1][j - 1] + 1;
                else
                    dp[i][j] = max(dp[i - 1][j], dp[i][j - 1]);
            }
        }
        printf(&quot;Twin Towers #%d\n&quot;, ++tcnt);
        printf(&quot;Number of Tiles : %d\n\n&quot;, dp[n][m]);
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