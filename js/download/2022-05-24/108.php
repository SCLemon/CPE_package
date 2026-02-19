<!DOCTYPE html>
<html>
<head>
<title>uva108</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva108</h1>
<pre class="prettyprint">
//uva108
#include &lt;climits&gt;
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

int main() {
	int max_sum = INT_MIN;
    int N = 0, sum = 0;
    vector&lt;vector&lt;int&gt; &gt; matrix, col_dp(matrix);
    while (cin &gt;&gt; N &amp;&amp; N) {
        max_sum = INT_MIN;
        matrix.assign(N + 1, vector&lt;int&gt;(N, 0));
        col_dp.assign(matrix.begin(), matrix.end());

        // Input
        for (int i = 1; i &lt;= N; i++) {
            for (int j = 0; j &lt; N; j++) {
                cin &gt;&gt; matrix[i][j];
            }
        }

        // Create column dp table
        for (int i = 1; i &lt;= N; i++) {
            for (int j = 0; j &lt; N; j++) {
                col_dp[i][j] = col_dp[i - 1][j] + matrix[i][j];
            }
        }

        // List all possible situations
        for (int i = 1; i &lt;= N; i++) {
            for (int j = i; j &lt;= N; j++) {
                sum = 0;
                for (int k = 0; k &lt; N; k++) {
                    sum += col_dp[j][k] - col_dp[i - 1][k];
                    if (sum &gt; max_sum) {
                        max_sum = sum;
                    }
                    if (sum &lt; 0) {
                        sum = 0;
                    }
                }
            }
        }
        cout &lt;&lt; max_sum &lt;&lt; endl;
    }
    return 0;
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->