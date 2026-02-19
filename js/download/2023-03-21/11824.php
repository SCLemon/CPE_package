<!DOCTYPE html>
<html>
<head>
<title>uva11824</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11824</h1>
<pre class="prettyprint">
//uva11824
#include &lt;iostream&gt;
#include &lt;algorithm&gt;
using namespace std;
int main() {
    int t, a[50];
    scanf(&quot;%d&quot;, &amp;t);
    while(t--) {
        int n = 0;
        while(scanf(&quot;%d&quot;, &amp;a[n]) == 1 &amp;&amp; a[n])
            n++;
        sort(a, a + n);
        int i, j, k;
        long long sum = 0, flag = 0, tmp;
        for (i = n - 1, j = 1; i &gt;= 0; i--, j++) {
            tmp = 1;
            for (k = 1; k &lt;= j; k++) {
                tmp *= a[i];
                if (sum + 2 * tmp &gt; 5000000) {
                    flag = 1;
                    break;
                }
            }
            if (flag)
                break;
            sum += 2 * tmp;
        }
        if (flag)
            puts(&quot;Too expensive&quot;);
        else
            printf(&quot;%lld\n&quot;, sum);
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