<!DOCTYPE html>
<html>
<head>
<title>uva11000</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11000</h1>
<pre class="prettyprint">
//uva11000
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

int main() {
    int N = 0;
    vector&lt;long long&gt; mbee, fbee;

    mbee.push_back(0);
    fbee.push_back(1);
    while (cin &gt;&gt; N &amp;&amp; N != -1) {
        while (N &gt;= mbee.size()) {
            int cur_m = mbee.back();
            int cur_f = fbee.back();
            mbee.push_back(cur_m + cur_f);
            fbee.push_back(cur_m + 1);
        }
        cout &lt;&lt; mbee[N] &lt;&lt; &quot; &quot; &lt;&lt; mbee[N] + fbee[N] &lt;&lt; endl;
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