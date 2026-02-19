<!DOCTYPE html>
<html>
<head>
<title>uva11284</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11284</h1>
<pre class="prettyprint">
//uva11284
#include &lt;bits/stdc++.h&gt;
#define inf 1e9

using namespace std;

vector&lt;int&gt; store;
long long int a[100][100], pro[100], y, dp[15][1&lt;&lt;15];

int main() {
    int cas, n, m, p, p1;
    long long int temp1, temp2;

    scanf(&quot;%d&quot;, &amp;cas);
    while (cas--) {
        scanf(&quot;%d %d&quot;, &amp;n, &amp;m);

        for (int i = 0; i&lt;=n; i++) {
            for (int j = 0; j&lt;=n; j++)
                a[i][j] = inf;
            a[i][i] = 0;
        }
        for (int i = 0, j, k; i&lt;m; i++) {
            scanf(&quot;%d %d&quot;, &amp;j, &amp;k);
            scanf(&quot;%lld.%lld&quot;, &amp;temp1, &amp;temp2);
            a[k][j] = a[j][k] = min(temp1*100+temp2, a[j][k]);
        }

        for (int k = 0; k&lt;=n; k++) {
            for (int i = 0; i&lt;=n; i++) {
                for (int j = 0; j&lt;=n; j++) {
                    if (a[i][j] &gt; a[i][k]+a[k][j])
                        a[i][j] = a[i][k]+a[k][j];
                }
            }
        }

        scanf(&quot;%d&quot;, &amp;p);
        p1 = p;
        memset(pro, 0, sizeof(pro[0])*(n+1));
        store.clear();

        for (int i = 0, st; i&lt;p; i++) {
            scanf(&quot;%d&quot;, &amp;st);
            if (pro[ st ] &gt; 0)
                p1--;
            else
                store.push_back(st);
            scanf(&quot;%d.%d&quot;, &amp;temp1, &amp;temp2);
            pro[ st ]+= (temp1*100+temp2);
        }p = p1;

        for (int i = 0; i&lt;p; i++) {
            for (int j = 0; j&lt;(1&lt;&lt;p); j++)
                dp[i][j] = -inf;
        }
        y = -inf;

        for (int i = 1; i&lt;(1&lt;&lt;p); i++) {
            for (int j = 0; j&lt;p; j++) {
                if (i&amp;(1&lt;&lt;j)) {
                    if ((i^(1&lt;&lt;j)) == 0) {
                        dp[j][i] = -2*a[0][ store[j] ]+pro[ store[j] ];
                        y = max(y, dp[j][i]);
                    }
                    else {
                        for (int k = 0; k&lt;p; k++) {
                            if (i&amp;(1&lt;&lt;k) &amp;&amp; k!=j) {
                                dp[j][i] = max(dp[j][i], dp[k][i^(1&lt;&lt;j)]+a[0][ store[k] ]-a[ store[k] ][ store[j] ]+pro[ store[j] ]-a[0][ store[j] ]);
                                y = max(y, dp[j][i]);
                            }
                        }
                    }
                }
            }
        }

        if (y&lt;=0)
            printf(&quot;Don&#39;t leave the house\n&quot;);
        else
            printf(&quot;Daniel can save $%lld.%02lld\n&quot;, y/100, y%100);
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