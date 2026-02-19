<!DOCTYPE html>
<html>
<head>
<title>uva496</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva496</h1>
<pre class="prettyprint">
//uva496
#include&lt;iostream&gt;
#include&lt;stdio.h&gt;
#include&lt;algorithm&gt;

using namespace std;

int main() {
    int s1[1000], s2[1000], n, m, match = 0;
    char c;
    while (scanf(&quot;%d%c&quot;, &amp;s1[0], &amp;c) == 2) {
        for (n = 1; c != &#39;\n&#39;; n++)
            scanf(&quot;%d%c&quot;, &amp;s1[n], &amp;c);
        c = 0;
        for (m = 0; c != &#39;\n&#39;; m++)
            scanf(&quot;%d%c&quot;, &amp;s2[m], &amp;c);
        sort(s1, s1 + n);
        sort(s2, s2 + m);
        match = 0;
        for (int i = 0, j = 0;i &lt; n &amp;&amp; j &lt; m;) {
            if (s2[j] == s1[i]) {
                    match++;
                    i++;
                    j++;
                    continue;
            }
            if (s1[i] &gt; s2[j])
                j++;
            else
                i++;
        }
        if (match == 0)
            cout &lt;&lt; &quot;A and B are disjoint\n&quot;;
        else if (match == n &amp;&amp; match == m)
            cout &lt;&lt; &quot;A equals B\n&quot;;
        else if (match == n)
            cout &lt;&lt; &quot;A is a proper subset of B\n&quot;;
        else if (match == m)
            cout &lt;&lt; &quot;B is a proper subset of A\n&quot;;
        else
            cout &lt;&lt; &quot;I&#39;m confused!\n&quot;;
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