<!DOCTYPE html>
<html>
<head>
<title>uva544</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva544</h1>
<pre class="prettyprint">
//uva544
#include &lt;bits/stdc++.h&gt;

using namespace std;

bool check[19900][200];

int main() {
    int n, r, num = 0;
    int k1, k2;
    int street[200][200], re[200][200], len[200];
    int route[19900][3], temp[19900][3], y;
    int city_ton[200];
    string s, s1;



    for (int ss = 1; scanf(&quot;%d%d&quot;, &amp;n, &amp;r) &amp;&amp; (n || r); ss++, num = 0) {
        getchar();

        memset(len, 0, sizeof(int)*n);
        memset(city_ton, 0, sizeof(int)*n);
        for (int i = 0; i&lt;n; i++) {
            for (int j = 0; j&lt;n; j++)
                street[i][j] = 0;
        }
        map&lt;string, int&gt; city;
        for (int i = 0, l = 0; i&lt;r; i++) {

            cin &gt;&gt; s, getchar(), cin &gt;&gt; s1, getchar(), cin &gt;&gt; l, getchar();

            if (city.count(s))
                k1 = city[s];
            else
                city[s] = num, k1 = num, num++;
            if (city.count(s1))
                k2 = city[s1];
            else
                city[s1] = num, k2 = num, num++;

            if (street[k1][k2]&lt;l) {
                street[k1][k2] = l, re[k1][ len[k1] ] = k2, len[k1]++;
                street[k2][k1] = l, re[k2][ len[k2] ] = k1, len[k2]++;
            }

        }
        cin &gt;&gt; s, getchar(), cin &gt;&gt; s1, getchar();
        k1 = city[s], k2 = city[s1];

        for (int i = 0, j = 0; i&lt;len[k1]; i++)
            j = re[k1][i], route[i][0] = j, route[i][1] = k1, route[i][2] = street[k1][j], city_ton[j] = street[k1][j];
        y = len[k1];

        y = 0;
        for (int l = 0; l&lt;n; l++) {
            for (int i = 0; i&lt;n; i++) {
                for (int j = 0; j&lt;n; j++) {
                    if (street[i][j] &lt; min(street[i][l], street[l][j]))
                        street[i][j] = min(street[i][l], street[l][j]);
                }
            }
        }
        printf(&quot;Scenario #%d\n%d tons\n\n&quot;, ss, street[k1][k2]);

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