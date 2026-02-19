<!DOCTYPE html>
<html>
<head>
<title>uva543</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva543</h1>
<pre class="prettyprint">
//uva543
#include &lt;iostream&gt;
#include &lt;vector&gt;
using namespace std;

int main() {
    const int MAXN = 1000005;
    vector&lt;bool&gt; is_prime(MAXN + 1, true);
    is_prime[0] = is_prime[1] = false;
    for (int p = 2; p * p &lt;= MAXN; p++) {
        if (is_prime[p]) {
            for (int j = p * p; j &lt;= MAXN; j += p) {
                is_prime[j] = false;
            }
        }
    }
    int n;
    while (cin &gt;&gt; n &amp;&amp; n) {
        bool found = false;
        int a = 0, b = 0;
        for (int i = 3; i &lt;= n / 2; i += 2) {
            if (is_prime[i] &amp;&amp; is_prime[n - i]) {
                a = i;
                b = n - i;
                found = true;
                break;
            }
        }

        if (found) {
            cout &lt;&lt; n &lt;&lt; &quot; = &quot; &lt;&lt; a &lt;&lt; &quot; + &quot; &lt;&lt; b &lt;&lt; &quot;\n&quot;;
        } else {
            cout &lt;&lt; &quot;Goldbach&#39;s conjecture is wrong.\n&quot;;
        }
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