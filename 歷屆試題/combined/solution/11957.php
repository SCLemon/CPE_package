<!DOCTYPE html>
<html>
<head>
<title>uva11957</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11957</h1>
<pre class="prettyprint">
//uva11957
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;string&gt;

using namespace std;

int main() {
    int T = 0;

    cin &gt;&gt; T;
    for (int i = 0; i &lt; T; i++) {
        int bsize = 0, ans = 0;

        cin &gt;&gt; bsize;
        vector&lt;string&gt; board(bsize, &quot;&quot;);
        vector&lt;vector&lt;int&gt;&gt; dp(bsize, vector&lt;int&gt;(bsize + 2, 0));

        for (int j = bsize - 1; j &gt;= 0; j--) {
            string temp;

            cin &gt;&gt; temp;
            board.at(j) = temp;
        }

        for (int j = 1; j &lt; bsize; j++) {
            for (int k = 0, l = 1; k &lt; bsize; k++, l++) {
                if (board[j][k] == &#39;W&#39; || board[j][k] == &#39;B&#39;) continue;

                if (board[j - 1][k - 1] == &#39;W&#39; || board[j - 1][k + 1] == &#39;W&#39;) {
                    dp[j][l] = 1;
                } else {
                    if (j &gt;= 2 &amp;&amp; board[j - 1][k - 1] == &#39;B&#39;) {
                        if (board[j - 2][k - 2] == &#39;W&#39;) {
                            dp[j][l] = 1;
                            continue;
                        }
                        dp[j][l] += dp[j - 2][l - 2];
                    } else {
                        dp[j][l] += dp[j - 1][l - 1];
                    }
                    if (j &gt;= 2 &amp;&amp; board[j - 1][k + 1] == &#39;B&#39;) {
                        if (board[j - 2][k + 2] == &#39;W&#39;) {
                            dp[j][l] = 1;
                            continue;
                        }
                        dp[j][l] += dp[j - 2][l + 2];
                    } else {
                        dp[j][l] += dp[j - 1][l + 1];
                    }
                }
                dp[j][l] %= 1000007;
                if (j == bsize - 1) {
                    ans += dp[j][l];
                }
            }
        }
        cout &lt;&lt; &quot;Case &quot; &lt;&lt; i + 1 &lt;&lt; &quot;: &quot; &lt;&lt; ans % 1000007 &lt;&lt; endl;
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