<!DOCTYPE html>
<html>
<head>
<title>uva1650</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1650</h1>
<pre class="prettyprint">
//uva1650
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;
#define MAXN 1024
#define MOD 1000000007

using namespace std;

char s[MAXN];
int dp[MAXN][MAXN], sum[MAXN][MAXN];

int main() {
    while (scanf(&quot;%s&quot;, s) == 1) {
        int n = (int) strlen(s);
        memset(dp, 0, sizeof(dp));
        memset(sum, 0, sizeof(sum));
        dp[0][1] = sum[0][1] = 1;

        for (int i = 0; i &lt; n; i++) {
            for (int j = 1; j &lt;= i + 2; j++) {
                if (s[i] == &#39;I&#39; || s[i] == &#39;?&#39;)
                    dp[i+1][j] = (dp[i+1][j] + sum[i][j-1]) % MOD;
                if (s[i] == &#39;D&#39; || s[i] == &#39;?&#39;)
                    dp[i+1][j] = (dp[i+1][j] + (sum[i][i+1] - sum[i][j-1]) % MOD + MOD) % MOD;
                sum[i+1][j] = (sum[i+1][j-1] + dp[i+1][j]) % MOD;
            }
        }

        printf(&quot;%d\n&quot;,sum[n][n+1]);
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