<!DOCTYPE html>
<html>
<head>
<title>uva10190</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10190</h1>
<pre class="prettyprint">
//uva10190
#include &lt;cmath&gt;
#include &lt;iostream&gt;
using namespace std;

int main() {
    long long n, m, i;

    while (cin &gt;&gt; n &gt;&gt; m) {
        long long cn1 = m;

        for (i = 1; cn1 &lt; n &amp;&amp; m &gt; 1; i++) {
            cn1 = pow(m, i);
        }

        if (cn1 &gt; n || m &lt;= 1) {
            cout &lt;&lt; &quot;Boring!&quot; &lt;&lt; endl;
        } else {
            while (cn1 &gt; 0) {
                cout &lt;&lt; cn1;
                if (cn1 != 1) {
                    cout &lt;&lt; &quot; &quot;;
                } else {
                    cout &lt;&lt; endl;
                }
                cn1 /= m;
            }
        }
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