<!DOCTYPE html>
<html>
<head>
<title>uva1262</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1262</h1>
<pre class="prettyprint">
//uva1262
#include&lt;cstdio&gt;
#include&lt;algorithm&gt;

using namespace std;

int main()
{
    int cas, n, l[5], c[26];
    char c1[6][6], c2[6][6], c3[6][6];

    scanf(&quot;%d\n&quot;, &amp;cas);
    while (cas--){
        scanf(&quot;%d\n&quot;, &amp;n);
        for (int i = 0; i&lt;6; i++)
            gets(c1[i]);

        for (int i = 0; i&lt;6; i++)
            gets(c2[i]);

        fill(l, l + 5, 0);

        for (int i = 0; i&lt;5; i++){
            char temp[12];
            int k = 0;

            fill(c, c + 26, 0);
            for (int j = 0; j&lt;6; j++){
                for (int j1 = 0; j1&lt;6; j1++){
                    if (c1[j][i] == c2[j1][i] &amp;&amp; c[(int)(c1[j][i] - &#39;A&#39;)] == 0)
                        c3[i][k] = c1[j][i], k++, l[i]++, c2[j1][i] = 1, c[(int)(c1[j][i] - &#39;A&#39;)] = 1;
                }
            }
            sort(c3[i], c3[i] + k);
        }

        if (n&gt;l[0] * l[1] * l[2] * l[3] * l[4])
            printf(&quot;NO\n&quot;);
        else {
            for (int i = 0; i&lt;5; i++){
                int temp = 1;
                for (int j = i + 1; j&lt;5; j++)
                    temp*= l[j];

                l[i] = (i != 4?(n-1) / temp:(n - 1) % l[i]);
                n-= l[i] * temp;
            }
            for (int i = 0; i&lt;5; i++)
                printf(&quot;%c&quot;, c3[i][l[i]]);
            printf(&quot;\n&quot;);
        }
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