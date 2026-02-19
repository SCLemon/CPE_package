<!DOCTYPE html>
<html>
<head>
<title>uva10721</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10721</h1>
<pre class="prettyprint">
//uva10721
#include &lt;iostream&gt;
#include &lt;stdio.h&gt;

using namespace std;

int main() {
    int n, k, m;
    long long tab[51][51][51] = {0};
    for(int i = 0; i &lt; 51; i++) tab[0][0][i] = 1;
    for(int i = 1; i &lt; 51; i++) {
        for(int j = 1; j &lt; 51; j++) {
            for(int k = 1;k &lt; 51; k++) {
                for(int p = 1; p &lt;= k &amp;&amp; p &lt;= i; p++) {
                    tab[i][j][k] += tab[i - p][j - 1][k];
                }
            }
        }
    }
    while(scanf(&quot;%d %d %d&quot;, &amp;n, &amp;k, &amp;m) == 3) {
        cout &lt;&lt; tab[n][k][m] &lt;&lt; endl;
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