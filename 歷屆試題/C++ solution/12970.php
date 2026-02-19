<!DOCTYPE html>
<html>
<head>
<title>uva12970</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12970</h1>
<pre class="prettyprint">
//uva12970
#include &lt;iostream&gt;

using namespace std;

unsigned long long gcd(unsigned long long a, unsigned long long b) {
    return (b == 0) ? a : gcd(b, a % b);
}

int main() {
    unsigned long long v1, d1, v2, d2;
    unsigned long long t1, t2;
    unsigned long long i = 0;
    unsigned long long a, b, g;
    while (cin &gt;&gt; v1 &gt;&gt; d1 &gt;&gt; v2 &gt;&gt; d2) {
        if (v1 == 0 &amp;&amp; d1 == 0 &amp;&amp; v2 == 0 &amp;&amp; d2 == 0)
            break;
        t1 = d1 * v2;
        t2 = d2 * v1;
        cout &lt;&lt; &quot;Case #&quot; &lt;&lt; ++i;
        if (t1 &lt; t2)
            cout &lt;&lt; &quot;: You owe me a beer!&quot; &lt;&lt; endl;
        else
            cout &lt;&lt; &quot;: No beer for the captain.&quot; &lt;&lt; endl;
        a = d1 * v2 + d2 * v1;
        b = 2 * v1 * v2;
        if (a &gt;= b) {
            g = gcd(a, b);
            a /= g;
            b /= g;
            if (b == 1)
                cout &lt;&lt; &quot;Avg. arrival time: &quot; &lt;&lt; a &lt;&lt; endl;
            else
                cout &lt;&lt; &quot;Avg. arrival time: &quot; &lt;&lt; a &lt;&lt; &quot;/&quot; &lt;&lt; b &lt;&lt; endl;
        } else {
            g = gcd(b, a);
            a /= g;
            b /= g;
            cout &lt;&lt; &quot;Avg. arrival time: &quot; &lt;&lt; a &lt;&lt; &quot;/&quot; &lt;&lt; b &lt;&lt; endl;
        }
    }
}

// equation:
// (d1/v1 + d2/v2)/2
// = ( (d1*v2 + d2*v1)/v1*v2 )/2
// = (d1*v2+d2*v1)/v1*v2*2
// ���� �� gcd
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