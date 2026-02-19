<!DOCTYPE html>
<html>
<head>
<title>uva10642</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10642</h1>
<pre class="prettyprint">
//uva10642
#include &lt;iostream&gt;

#define ll long long int

using namespace std;
void solve(int i) {
    long long int x0, y0, x1, y1, s0, s1;
    cin &gt;&gt; x0 &gt;&gt; y0 &gt;&gt; x1 &gt;&gt; y1;
    cout &lt;&lt; &quot;Case &quot; &lt;&lt; i &lt;&lt; &quot;: &quot;;
    s0 = x0 + y0 + (x0 + y0 - 1) * (x0 + y0) / 2 + x0;
    s1 = x1 + y1 + (x1 + y1 - 1) * (x1 + y1) / 2 + x1;
    cout &lt;&lt; s1 - s0 &lt;&lt; endl;
}

int main() {
    int t;
    cin &gt;&gt; t;
    for (int i = 1; i &lt;= t; i++) {
        solve(i);
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