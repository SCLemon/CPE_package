<!DOCTYPE html>
<html>
<head>
<title>uva12382</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12382</h1>
<pre class="prettyprint">
//uva12382
#include&lt;cstdio&gt;
#include&lt;algorithm&gt;
#include &lt;stdio.h&gt;
using namespace std;

int r[1005],c[1005];

bool cmp(int a, int b){
    return a &gt; b;
}

int main(void){
    int testcase, i, j, n, m, ans;
    scanf(&quot;%d&quot;, &amp;testcase);
    while (testcase--){
        ans = 0;
        scanf(&quot;%d %d&quot;, &amp;n, &amp;m);
        for (i = 0; i &lt; n; i++)
            scanf(&quot;%d&quot;, &amp;r[i]);
        for (i = 0; i &lt; m; i++)
            scanf(&quot;%d&quot;, &amp;c[i]);
        sort(r, r + n, cmp);
        sort(c, c + m, cmp);

        for (i = 0; i &lt; m; i++){
            if (c[i] == 0)
                continue;
            for (j = 0; j &lt; n; j++){
                if (r[j]){
                    ans++;
                    c[i]--;
                    r[j]--;
                }

                if (c[i] == 0)
                    break;
            }
            ans = ans + c[i];
            sort(r, r + n, cmp);
        }

        for (i = 0; i &lt; n; i++)
            ans = ans + r[i];

        printf(&quot;%d\n&quot;, ans);
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