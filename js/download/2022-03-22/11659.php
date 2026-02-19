<!DOCTYPE html>
<html>
<head>
<title>uva11659</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11659</h1>
<pre class="prettyprint">
//uva11659
#include &lt;algorithm&gt;
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

int main() {
    int n = 0, a = 0, x = 0, y = 0;
    vector&lt;int&gt; ifm_rel;
    vector&lt;int&gt; ifm_unrel;

    while (cin &gt;&gt; n &gt;&gt; a &amp;&amp; (n || a)) {
        ifm_rel.assign(n + 1, 0);
        ifm_unrel.assign(n + 1, 0);

        for (int i = 0; i &lt; a; i++) {
            cin &gt;&gt; x &gt;&gt; y;
            if (y &gt; 0)
                ifm_rel[x] |= 1 &lt;&lt; (y - 1);
            if (y &lt; 0)
                ifm_unrel[x] |= 1 &lt;&lt; (-y - 1);
        }

        int maxim_situ = 1 &lt;&lt; n;
        int max_ifm_rel = 0;
        bool conflict = false;
        for (int i = 0; i &lt; maxim_situ; i++) {
            int ifm_case = i;
            conflict = false;

            for (int j = 1; j &lt;= n; j++) {
                if ((ifm_case &amp; (1 &lt;&lt; (j - 1))) == 0)
                    continue;

                if ((ifm_unrel[j] &amp; i) != 0 || (ifm_rel[j] &amp; i) != ifm_rel[j]) {
                    conflict = true;
                    break;
                }
            }
            if (!conflict) {
                int count = 0;

                while (ifm_case) {
                    if (ifm_case &amp; 1)
                        count++;
                    ifm_case &gt;&gt;= 1;
                }
                max_ifm_rel = max(count, max_ifm_rel);
            }
        }
        cout &lt;&lt; max_ifm_rel &lt;&lt; endl;
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