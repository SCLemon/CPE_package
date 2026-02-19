<!DOCTYPE html>
<html>
<head>
<title>uva815</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva815</h1>
<pre class="prettyprint">
//uva815
#include &lt;algorithm&gt;
#include &lt;climits&gt;
#include &lt;cmath&gt;
#include &lt;iomanip&gt;
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

int main() {
    int m = 0, n = 0, R = 0;

    while (cin &gt;&gt; m &gt;&gt; n &amp;&amp; m &amp;&amp; n) {
        int w = 0, h_sum = 0, out_index = 0;
        vector&lt;int&gt; block;

        // Input
        for (int i = 0; i &lt; m * n; i++) {
            int e;
            cin &gt;&gt; e;
            block.push_back(e);
        }
        block.push_back(INT_MAX / 100 / m / n);
        cin &gt;&gt; w;

        // Process
        sort(block.begin(), block.end());

        int remain_w = w;
        for (int i = 1; i &lt;= m * n; i++) {
            int diff = 0;
            if (block[i] != block[i - 1]) {
                diff = block[i] - block[i - 1];
                if (remain_w &gt; diff * 100 * i) {
                    remain_w -= diff * 100 * i;
                } else {
                    out_index = i;
                    h_sum += block[i - 1];
                    break;
                }
            }
            h_sum += block[i - 1];
        }

        // Output
        cout &lt;&lt; fixed &lt;&lt; setprecision(2);
        cout &lt;&lt; &quot;Region &quot; &lt;&lt; ++R &lt;&lt; endl;
        cout &lt;&lt; &quot;Water level is &quot; &lt;&lt; 0.01 * (w + 100 * h_sum) / out_index
             &lt;&lt; &quot; meters.&quot; &lt;&lt; endl;
        cout &lt;&lt; 100.0 * out_index / m / n
             &lt;&lt; &quot; percent of the region is under water.&quot; &lt;&lt; endl
             &lt;&lt; endl;
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