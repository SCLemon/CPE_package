<!DOCTYPE html>
<html>
<head>
<title>uva10326</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10326</h1>
<pre class="prettyprint">
//uva10326
#include &lt;iostream&gt;
#include &lt;iomanip&gt;
#include &lt;vector&gt;
#include &lt;math.h&gt;

using namespace std;

int main() {
    int root_num = 0;
    vector&lt;long long&gt; init;
    vector&lt;long long&gt; output;
    vector&lt;vector&lt;long long&gt;&gt; dp;

    while (cin &gt;&gt; root_num) {
        int temp = 0;
        init.assign(root_num + 1, 0);
        dp.assign(root_num, init);

        for (int i = 0; i &lt; root_num; i++) {
            cin &gt;&gt; temp;

            temp = -temp;
            dp[i][0] = 1;
            if (i == 0) {
                dp[i][1] = temp;
                continue;
            }

            for (int j = 1; j &lt; i + 2; j++) {
                dp[i][j] = dp[i - 1][j - 1] * temp + dp[i - 1][j];
            }
        }

        output = dp.back();
        for (int i = 0; i &lt;= root_num; i++) {
            int power = root_num - i;

            if (output[i] == 0 &amp;&amp; i != root_num) {
                continue;
            }
            if (i == 0) {  // 首項
                if (power == 0) {
                    cout &lt;&lt; &quot;1&quot;;
                    break;
                } else if (power == 1) {
                    cout &lt;&lt; &quot;x&quot;;
                    continue;
                } else {
                    cout &lt;&lt; &quot;x^&quot; &lt;&lt; power;
                    continue;
                }
            } else if (0 &lt; i &amp;&amp; i &lt; root_num) {  // 中間項
                if (output[i] &lt; 0) {
                    cout &lt;&lt; &quot; - &quot;;
                } else if (output[i] &gt; 0) {
                    cout &lt;&lt; &quot; + &quot;;
                }
                if (abs(output[i]) &gt; 1) {
                    cout &lt;&lt; abs(output[i]);
                }
            } else if (i == root_num) {
                if (output[i] &lt; 0) {
                    cout &lt;&lt; &quot; - &quot;;
                } else if (output[i] &gt;= 0) {
                    cout &lt;&lt; &quot; + &quot;;
                }
                cout &lt;&lt; abs(output[i]);
                continue;
            }
            if (power == 1) {
                cout &lt;&lt; &quot;x&quot;;
            } else {
                cout &lt;&lt; &quot;x^&quot; &lt;&lt; power;
            }
        }
        cout &lt;&lt; &quot; = 0&quot; &lt;&lt; endl;
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