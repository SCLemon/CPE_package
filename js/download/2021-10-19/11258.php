<!DOCTYPE html>
<html>
<head>
<title>uva11258</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11258</h1>
<pre class="prettyprint">
//uva11258
#include &lt;algorithm&gt;
#include &lt;climits&gt;
#include &lt;iostream&gt;
#include &lt;string&gt;

using namespace std;

int main() {
    int N;
    cin &gt;&gt; N;
    cin.ignore();
    while (N--) {
        string seq;
        getline(cin, seq);
        long long int DP[210] = {0}; // DP[i] represents the maximal sum for 0 ~ i-1
        for (int i = 0; i &lt; seq.size(); ++i) {
            if (seq[i] == &#39;0&#39;) {
                DP[i + 1] = max(DP[i + 1], DP[i]);
            } else {
                long long int sum = 0;
                for (int j = i; j &lt; seq.size(); ++j) {
                    sum = sum * 10 + (seq[j] - &#39;0&#39;); // calculate the sum for range i~j
                    if (sum &gt; INT_MAX)
                        break;                               // if sum of the range is larger than 32-bit signed integer, break
                    DP[j + 1] = max(DP[j + 1], DP[i] + sum); // or, update the sum: DP[j+1] = DP[j+1] or the larger one (DP[i] + sum)
                }
            }
        }
        cout &lt;&lt; DP[seq.size()] &lt;&lt; endl; // the final answer is stored at position n ( the length of input )
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