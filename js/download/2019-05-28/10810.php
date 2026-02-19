<!DOCTYPE html>
<html>
<head>
<title>uva10810</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10810</h1>
<pre class="prettyprint">
//uva10810
#include&lt;bits/stdc++.h&gt;

using namespace std;
int temp[500000];

long long int mergesort(int a[], int x, int y, long long int k) {
    if (y == x)
        return k;
    k = mergesort(a, x, (x+y)/2, k);
    k = mergesort(a, (x+y)/2+1, y, k);

    for (int i = x, i1 = (x+y)/2+1, j = (x+y)/2, j1 = y, l = 0;;) {
        if (i&gt;j &amp;&amp; i1&gt;j1)
            break;
        else {
            if (i&gt;j) {
                while (i1 &lt;= j1) temp[l] = a[i1], i1++, l++;
            }
            else if (i1&gt;j1) {
                while (i&lt;=j) temp[l] = a[i], i++, l++;
            }
            else if (a[i] &gt; a[i1]) {
                temp[l] = a[i1], k+= (j-i+1), l++, i1++;
            }
            else if (a[i] &lt; a[i1]) {
                temp[l] = a[i], l++, i++;
            }
        }
    }
    for(int i = x, j = 0; i&lt;=y; i++, j++)
        a[i] = temp[j];

    return k;
}
int main() {
    int n, a[500000];
    long long int k;

    while( scanf(&quot;%d&quot;,&amp;n) &amp;&amp; n) {
        k = 0;
        for(int i = 0; i&lt;n; i++)
            scanf(&quot;%d&quot;, &amp;a[i]);

        k = mergesort(a, 0, n-1, k);

        printf(&quot;%lld\n&quot;, k);
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