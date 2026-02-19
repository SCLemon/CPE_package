<!DOCTYPE html>
<html>
<head>
<title>uva12869</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12869</h1>
<pre class="prettyprint">
//uva12869
#include &lt;iostream&gt;
using namespace std;

int main() {
    long long int low, high, low_zeros, high_zeros;
    while (cin &gt;&gt; low &gt;&gt; high) {
        if (low == 0 &amp;&amp; high == 0)
            break;
        low_zeros = 0;
        high_zeros = 0;
        low_zeros = low_zeros + (low / 5);
        high_zeros = high_zeros + (high / 5);
        cout &lt;&lt; high_zeros - low_zeros + 1 &lt;&lt; endl;
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