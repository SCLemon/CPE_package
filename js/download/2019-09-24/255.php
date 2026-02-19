<!DOCTYPE html>
<html>
<head>
<title>uva255</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva255</h1>
<pre class="prettyprint">
//uva255
#include &lt;bits/stdc++.h&gt;

using namespace std;

int main() {

    int k, q, m;

    while (scanf(&quot;%d %d %d&quot;, &amp;k, &amp;q, &amp;m) != EOF) {

        if (k == q)
            printf(&quot;Illegal state\n&quot;);
        else {
            if (q / 8 != m / 8 &amp;&amp; q % 8 != m % 8)
                printf(&quot;Illegal move\n&quot;);
            else {
                if (q == m)
                    printf(&quot;Illegal move\n&quot;);
                else if ((k == 0 &amp;&amp; m == 9) || (k == 7 &amp;&amp; m == 14) || (k == 56 &amp;&amp; m == 49) || (k == 63 &amp;&amp; m == 54))
                    printf(&quot;Stop\n&quot;);
                else if (q / 8 == m / 8 &amp;&amp; k / 8 == m / 8) {
                    if ((k - m)*(k - q) &lt;= 0)
                        printf(&quot;Illegal move\n&quot;);
                    else if (m == k + 1 || m == k - 1)
                        printf(&quot;Move not allowed\n&quot;);
                    else
                        printf(&quot;Continue\n&quot;);
                }
                else if (q % 8 == m % 8 &amp;&amp; k % 8 == m % 8) {
                    if ((k - m)*(k - q) &lt;= 0)
                        printf(&quot;Illegal move\n&quot;);
                    else if (m == k + 8 || m == k - 8)
                        printf(&quot;Move not allowed\n&quot;);
                    else
                        printf(&quot;Continue\n&quot;);
                }
                else {
                    if (((m - 1) / 8 == m / 8 &amp;&amp; m - 1 == k) || ((m + 1) / 8 == m / 8 &amp;&amp; m + 1 == k))
                        printf(&quot;Move not allowed\n&quot;);
                    else if(((m - 8) &gt;= 0 &amp;&amp; k == m - 8) || ((m + 8) &lt; 64 &amp;&amp; k == m + 8))
                        printf(&quot;Move not allowed\n&quot;);
                    else
                        printf(&quot;Continue\n&quot;);
                }
            }
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