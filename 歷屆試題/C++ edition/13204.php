<!DOCTYPE html>
<html>
<head>
<title>uva13204</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva13204</h1>
<pre class="prettyprint">
//uva13204
#include &lt;iostream&gt;
#include &lt;vector&gt;
#define MOD 1000000007
using namespace std;

int main() {
    vector&lt;long long&gt; factorial(1000001, 1);
    for (int i = 1; i &lt;= 1000000; ++i) {
        factorial[i] = (factorial[i - 1] * i) % MOD;
    }
    
    int n;
    while (cin &gt;&gt; n) {
        long long res = (factorial[n / 2] * factorial[n / 2]) % MOD;
        if (n % 2) {
            res = (res * n) % MOD;
        }
        cout &lt;&lt; res &lt;&lt; endl;
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