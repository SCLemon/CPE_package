<!DOCTYPE html>
<html>
<head>
<title>uva10633</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10633</h1>
<pre class="prettyprint">
//uva10633
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
#include &lt;stdio.h&gt;
using namespace std;

int main() {
    int count;
    long long int n, M;
    while (scanf(&quot;%lld&quot;, &amp;n) &amp;&amp; n) {
        count = 0;
        for (int a = 9; a &gt;= 0; --a) {
            if (((n - a) % 9) == 0) {
                M = (n - a) / 9;
                if (count++) putchar(&#39; &#39;);
                printf(&quot;%lld&quot;, n + M);
            }
        }
        putchar(&#39;\n&#39;);
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