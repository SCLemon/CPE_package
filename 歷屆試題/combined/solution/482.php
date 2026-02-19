<!DOCTYPE html>
<html>
<head>
<title>uva482</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva482</h1>
<pre class="prettyprint">
//uva482
#include &lt;cstdio&gt;
#include &lt;string&gt;
#include &lt;iostream&gt;
#include &lt;algorithm&gt;
#include &lt;vector&gt;

using namespace std;

vector&lt;int&gt; vi;

int main() {
    int test_case;
    scanf(&quot;%d&quot;, &amp;test_case);

    while (test_case--) {
        vi.clear();
        int n;
        char c;
        string s;

        /// _ symbol means space, input : 3 1 2 -&gt; (3_)(1_)(2\n)
        while (scanf(&quot;%d%c&quot;, &amp;n, &amp;c) == 2) {
            vi.push_back(n);
            if (c == &#39;\n&#39;)
                break;
        }

        vector&lt;string&gt; vs(vi.size() + 1);
        for (int i = 0; i &lt; vi.size(); i++) {
            cin &gt;&gt; s;
            vs[vi[i]] = s;
        }

        for (int i = 1; i &lt; vs.size(); i++)
            cout &lt;&lt; vs[i] &lt;&lt; endl;

        if (test_case != 0)
            cout &lt;&lt; endl;
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