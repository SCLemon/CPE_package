<!DOCTYPE html>
<html>
<head>
<title>uva10364</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10364</h1>
<pre class="prettyprint">
//uva10364
#include&lt;cstdio&gt;
#include&lt;algorithm&gt;
using namespace std;

bool dfs(int sum, int x, int y, int l, int m, int a[], int c[])
{
    if (y == 3) return true;
    for (int i = x; i &lt; m; i++){
        if (sum + a[i] &lt;= l &amp;&amp; c[i]){
            c[i] = 0, sum += a[i];
            if (sum == l){
                if (dfs(0, 0, y+1, l, m, a, c))
                    return true;
                else
                    c[i] = 1, sum -= a[i];
            }
            else if (dfs(sum, i+1, y, l, m, a, c))
                return true;
            else
                c[i] = 1, sum -= a[i];
        }
    }return false;
}

int main()
{
    int m, a[25], c[25], cas;

    scanf(&quot;%d&quot;, &amp;cas);
    while (cas--){
        int sum = 0;
        scanf(&quot;%d&quot;, &amp;m);
        for (int i = 0; i &lt; m; i++)
            scanf(&quot;%d&quot;,&amp;a[i]), c[i] = 1, sum += a[i];

        sort(a, a+m);

        if (sum%4 || a[m-1] &gt; sum/4)
            printf(&quot;no\n&quot;);
        else if (dfs(0, 0, 0, sum/4, m, a, c))
            printf(&quot;yes\n&quot;);
        else
            printf(&quot;no\n&quot;);
    }
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