<!DOCTYPE html>
<html>
<head>
<title>uva12627</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12627</h1>
<pre class="prettyprint">
//uva12627
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;cmath&gt;

using namespace std;

long long red_ballon(int k, int r) {
    if (r == 0)
        return 0;
    if (k == 0)
        return 1;

    if (r &lt;= pow(2, k - 1))
        return 2 * red_ballon(k - 1, r);
    else
        return 2 * pow(3, k - 1) + red_ballon(k - 1, r - pow(2, k - 1));
}

int main() {
    int case_num = 0;
    int k = 0, row_a = 0, row_b = 0;

    cin &gt;&gt; case_num;
    for (int i = 0; i &lt; case_num; i++) {
        cin &gt;&gt; k &gt;&gt; row_a &gt;&gt; row_b;

        cout &lt;&lt; &quot;Case &quot; &lt;&lt; i + 1 &lt;&lt; &quot;: &quot;
             &lt;&lt; red_ballon(k, row_b) - red_ballon(k, row_a - 1) &lt;&lt; endl;
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