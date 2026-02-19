<!DOCTYPE html>
<html>
<head>
<title>uva674</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva674</h1>
<pre class="prettyprint">
//uva674
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
using namespace std;

int main() {
    const int MAX_COIN_VALUE = 7489;
    const int coinValues[] = {1, 5, 10, 25, 50};
    const int MAX_COIN_TYPE = sizeof(coinValues) / sizeof(int);

    int ways[MAX_COIN_VALUE + 5] = {1};
    for (int i = 0; i &lt; MAX_COIN_TYPE; ++i) {
        for (int j = 0; j &lt;= MAX_COIN_VALUE; ++j) {
            if (j + coinValues[i] &gt; MAX_COIN_VALUE) break;
            ways[j + coinValues[i]] += ways[j];
        }
    }

    int amount;
    while (scanf(&quot;%d&quot;, &amp;amount) != EOF) {
        printf(&quot;%d\n&quot;, ways[amount]);
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