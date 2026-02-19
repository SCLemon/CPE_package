<!DOCTYPE html>
<html>
<head>
<title>uva11584</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11584</h1>
<pre class="prettyprint">
//uva11584
#include &lt;algorithm&gt;
#include &lt;iostream&gt;
#include &lt;string&gt;
#include &lt;vector&gt;

using namespace std;

bool if_pd(const string&amp; str, int s, int e) {
    while (s &lt; e) {
        if (str[s] != str[e]) return false;
        ++s;
        --e;
    }
    return true;
}

int main() {
    int n = 0;

    cin &gt;&gt; n;
    for (int c = 0; c &lt; n; c++) {
        string input = &quot;&quot;;

        cin &gt;&gt; input;
        int l = input.size();
        vector&lt;int&gt; dp(l + 1, 0);

        dp[1] = 1;
        for (int i = 2; i &lt;= l; i++) {
            dp[i] = dp[i - 1] + 1;
            for (int j = 0; j &lt; i; j++) {
                if (if_pd(input, j, i - 1)) {
                    dp[i] = min(dp[j] + 1, dp[i]);
                }
            }
        }
        cout &lt;&lt; dp[l] &lt;&lt; endl;
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