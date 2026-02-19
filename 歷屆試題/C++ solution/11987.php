<!DOCTYPE html>
<html>
<head>
<title>uva11987</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11987</h1>
<pre class="prettyprint">
//uva11987
#include &lt;bits/stdc++.h&gt;

using namespace std;
int ances[200001], num[200001], sum[200001], mapp[200001];

int update(int p) {
    if (p != ances[p])
        ances[p] = update(ances[p]);

    return ances[p];
}

int main () {
    int n, m, p, q, op, node;

    while (scanf(&quot;%d%d&quot;, &amp;n, &amp;m)!=EOF) {
        for (int i = 0; i&lt;=n; i++)
            ances[i] = sum[i] = mapp[i] = i, num[i] = 1;
        node = n+1;
        while (m--) {
            scanf(&quot;%d&quot;, &amp;op);
            if (op == 3) {
                scanf(&quot;%d&quot;, &amp;p);
                int temp = mapp[p];
                printf(&quot;%d %d\n&quot;, num[ update(temp) ], sum[ update(temp) ]);
            }
            else {
                scanf(&quot;%d%d&quot;, &amp;p, &amp;q);
                int i = update(mapp[p]), j = update(mapp[q]);
                if (op == 1) {
                    if (i != j) {
                        sum[j]+= sum[i], num[j]+= num[i];
                        ances[i] = j;
                        sum[i] = num[i] = 0;
                    }
                }
                else {
                    if (i != j) {
                        mapp[p] = node++;
                        ances[ mapp[p] ] = j;
                        sum[j]+= p, num[j]++;
                        sum[i]-= p, num[i]--;
                    }
                }
            }
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