<!DOCTYPE html>
<html>
<head>
<title>uva1368</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1368</h1>
<pre class="prettyprint">
//uva1368
#include &lt;bits/stdc++.h&gt;

using namespace std;

int main() {
    int cas, m, n, err;
    int a[4][1001], temp;
    string s, s1 = {&#39;A&#39;, &#39;C&#39;, &#39;G&#39;, &#39;T&#39;};

    scanf(&quot;%d&quot;, &amp;cas);
    while (cas--) {
        scanf(&quot;%d %d&quot;, &amp;m, &amp;n);
        getchar();
        memset(a, 0, sizeof(a));
        for (int i = 0; i&lt;m; i++) {
            cin &gt;&gt; s;
            for (int j = 0; j&lt;n; j++) {
                for (int k = 0; k&lt;4; k++) {
                    if (s[j] == s1[k]) {
                        a[k][j]++;
                        break;
                    }
                }
            }
        }
        err = 0;
        for (int i = 0; i&lt;n; i++) {
            temp = max(max(max(a[0][i], a[1][i]), a[2][i]), a[3][i]);
            err+= (m-temp);
            for (int j = 0; j&lt;4; j++) {
                if (temp == a[j][i]) {
                    cout &lt;&lt; s1[j];
                    break;
                }
            }
        }
        printf(&quot;\n%d\n&quot;, err);
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