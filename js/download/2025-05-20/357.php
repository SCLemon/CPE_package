<!DOCTYPE html>
<html>
<head>
<title>uva357</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva357</h1>
<pre class="prettyprint">
//uva357
#include &lt;iostream&gt;
#include &lt;vector&gt;
using namespace std;

int main(){
    const int MAX = 30000;
    // dp[i] 表示組成 i 分的方法數
    vector&lt;long long&gt; dp(MAX + 1, 0);
    dp[0] = 1;  // 0 分只有 1 種組合：不使用任何硬幣

    // US 硬幣面額：1c, 5c, 10c, 25c, 50c
    int coins[5] = {1, 5, 10, 25, 50};

    // 動態規劃：依序加入每個硬幣，累加組合數
    for (int i = 0; i &lt; 5; i++){
        for (int j = coins[i]; j &lt;= MAX; j++){
            dp[j] += dp[j - coins[i]];
        }
    }
    
    int n;
    // 每行一個測試案例，直到輸入結束
    while(cin &gt;&gt; n){
        if(dp[n] == 1)
            cout &lt;&lt; &quot;There is only 1 way to produce &quot; &lt;&lt; n &lt;&lt; &quot; cents change.&quot; &lt;&lt; &quot;\n&quot;;
        else
            cout &lt;&lt; &quot;There are &quot; &lt;&lt; dp[n] &lt;&lt; &quot; ways to produce &quot; &lt;&lt; n &lt;&lt; &quot; cents change.&quot; &lt;&lt; &quot;\n&quot;;
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