<!DOCTYPE html>
<html>
<head>
<title>uva1207</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1207</h1>
<pre class="prettyprint">
//uva1207
#include&lt;bits/stdc++.h&gt;

using namespace std;

int main()
{
    int x, y;

    while (scanf(&quot;%d &quot;, &amp;x) != EOF)
    {
        char c1[x + 5];
        gets(c1);
        scanf(&quot;%d &quot;, &amp;y);
        char c2[x + 5];
        gets(c2);

        int dp[x][y];
        for (int i = 0; i&lt;y; i++)
        {
            if (c1[0] == c2[i])
            {
                if(i == 0)
                    dp[0][0] = 0;
                else
                    dp[0][i] = dp[0][i - 1];

                for (int j = i + 1; j&lt;y; j++)
                    dp[0][j] = dp[0][i] + j - i;

                break;
            }
            dp[0][i] = i + 1;
        }
        for (int i = 0; i&lt;x; i++)
        {
            if (c2[0] == c1[i])
            {
                if (i == 0)
                    dp[0][0] = 0;
                else
                    dp[i][0] = dp[i - 1][0];

                for (int j = i; j&lt;x; j++)
                    dp[j][0] = dp[i][0] + j - i;

                break;
            }
            dp[i][0] = i + 1;
        }
        for (int i = 1; i&lt;x; i++)
        {
            for (int j = 1; j&lt;y; j++)
            {

                if (c1[i] == c2[j]) dp[i][j] = dp[i - 1][j - 1];
                else
                {
                    if (dp[i - 1][j - 1] &lt;=dp[i - 1][j] &amp;&amp; dp[i - 1][j - 1] &lt;=dp[i][j - 1])
                        dp[i][j] = dp[i - 1][j - 1] + 1;

                    else if (dp[i][j - 1] &lt;=dp[i - 1][j] &amp;&amp; dp[i][j - 1] &lt;=dp[i - 1][j - 1])
                        dp[i][j] = dp[i][j - 1] + 1;

                    else
                        dp[i][j] = dp[i - 1][j] + 1;
                }
            }
        }
        printf(&quot;%d\n&quot;, dp[x - 1][y - 1]);
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