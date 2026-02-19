<!DOCTYPE html>
<html>
<head>
<title>uva12908</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12908</h1>
<pre class="prettyprint">
//uva12908
#include &lt;algorithm&gt;
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

int main() {
    int input = 0;
    vector&lt;int&gt; table;

    for (int i = 0; i &lt;= 20000; i++) {
        table.push_back((i * (i + 1)) / 2);
    }

    while (cin &gt;&gt; input &amp;&amp; input) {
        vector&lt;int&gt;::iterator itTable = upper_bound(table.begin(), table.end(), input);
        cout &lt;&lt; *itTable - input &lt;&lt; &quot; &quot; &lt;&lt; itTable - table.begin() &lt;&lt; endl;
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