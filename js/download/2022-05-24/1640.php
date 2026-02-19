<!DOCTYPE html>
<html>
<head>
<title>uva1640</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1640</h1>
<pre class="prettyprint">
//uva1640
#include &lt;algorithm&gt;
#include &lt;cmath&gt;
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

vector&lt;int&gt; i2v(int n) {
    vector&lt;int&gt; output;

    while (n != 0) {
        output.push_back(n % 10);
        n /= 10;
    }
    reverse(output.begin(), output.end());

    return output;
}

void solve(const int n, vector&lt;int&gt;&amp; result) {
    vector&lt;int&gt; vec_num = i2v(n);
    int digits = vec_num.size();
    int power = pow(10, digits - 1);

    for (int i = 0; i &lt; digits; i++) {
        for (int j = 0; j &lt; vec_num[i]; j++) {
            result[j] += power;
        }

        for (int j = 0; j &lt; 10; j++) {
            result[j] += power / 10 * (digits - i - 1) * vec_num[i];
        }

        if (i + 1 &lt; digits) {
            result[vec_num[i]] += n % power;
        }
        result[vec_num[i]]++;

        result[0] -= power;
        power /= 10;
    }
}

int main() {
    int a, b;
    vector&lt;int&gt; result_a(10, 0), result_b(10, 0);

    while (cin &gt;&gt; a &gt;&gt; b &amp;&amp; a &amp;&amp; b) {
        result_a.assign(10, 0);
        result_b.assign(10, 0);

        if (a &gt; b) swap(a, b);

        solve(a - 1, result_a);
        solve(b, result_b);

        for (int i = 0; i &lt; 9; i++) {
            cout &lt;&lt; result_b[i] - result_a[i] &lt;&lt; &quot; &quot;;
        }
        cout &lt;&lt; result_b[9] - result_a[9] &lt;&lt; endl;
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