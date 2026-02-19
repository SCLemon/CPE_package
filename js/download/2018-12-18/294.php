<!DOCTYPE html>
<html>
<head>
<title>uva294</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva294</h1>
<pre class="prettyprint">
//uva294
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
using namespace std;
int prime[1000], num = 0;

int main() {
	for (int i = 2; i &lt; 1500; i++){
        bool flag = false;
        for (int j = 2; j*j &lt;= i; j++)
            if(i%j == 0) {
          		flag = true;
                break;
            }

        if (!flag)
            prime[num++] = i;
    }

    int N, L, U;
    cin &gt;&gt; N;
    while (N--){
        cin &gt;&gt; L &gt;&gt; U;
        int Max = 0, maxNum;

        for (int i = L; i &lt;= U; i++){
            int sum = i, ans = 1;
            for(int j = 0; j &lt; num &amp;&amp; sum &gt; 1; j++){
                int pow = 1;
                while (sum % prime[j] == 0){
                    pow++;
                    sum /= prime[j];
                }
                ans *= pow;
            }
            if (ans &gt; Max)
                Max = ans, maxNum = i;
        }
        cout &lt;&lt; &quot;Between &quot; &lt;&lt; L &lt;&lt; &quot; and &quot; &lt;&lt; U &lt;&lt; &quot;, &quot; &lt;&lt; maxNum &lt;&lt; &quot; has a maximum of &quot; &lt;&lt; Max &lt;&lt; &quot; divisors.&quot; &lt;&lt; endl;
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