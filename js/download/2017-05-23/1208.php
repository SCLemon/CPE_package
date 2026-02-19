<!DOCTYPE html>
<html>
<head>
<title>uva1208</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1208</h1>
<pre class="prettyprint">
//uva1208
#include &lt;algorithm&gt;
#include &lt;iostream&gt;
#include &lt;cstdlib&gt;
#include &lt;cstdio&gt;

using namespace std;

typedef struct _enode
{
    int point1;
    int point2;
    int weight;
}enode;
enode E[10001];

//union_set
int sets[101];
int RANK[101];

void set_inital(int a, int b)
{
    for ( int i = a; i &lt;= b; i++) {
        RANK[i] = 0;
        sets[i] = i;
    }
}

int  set_find(int a)
{
    if (a != sets[a])
        sets[a] = set_find(sets[a]);
    return sets[a];
}

void set_union(int a, int b)
{
    if (RANK[a] &lt; RANK[b])
        sets[a] = b;
    else {
        if (RANK[a] == RANK[b])
            RANK[a]++;
        sets[b] = a;
    }
}
//end_union_set

int cmp_e(enode a, enode b)
{
    if (a.weight == b.weight) {
        if (a.point1 == b.point1)
            return a.point2 &lt; b.point2;
        else return a.point1 &lt; b.point1;
    }else return a.weight &lt; b.weight;
}

void kruskal(int n, int m)
{
    sort(E, E + m, cmp_e);
    set_inital(0, n);
    for (int i = 0; i &lt; m; i++) {
        int A = set_find(E[i].point1);
        int B = set_find(E[i].point2);
        if (A != B) {
            set_union(A, B);
            printf(&quot;%c-%c %d\n&quot;,E[i].point1 + &#39;A&#39;,E[i].point2 + &#39;A&#39;,E[i].weight);
        }
    }
}

int main()
{
    int t, n, a, c;
    while (~scanf(&quot;%d&quot;, &amp;t))
    for (int k = 1; k &lt;= t; k++) {
        scanf(&quot;%d&quot;, &amp;n);
        int e_count = 0;
        for (int i = 0; i &lt; n; i++)
        for (int j = 0; j &lt; n; j++) {
            scanf(&quot;%d%c&quot;, &amp;a, &amp;c);
            E[e_count].point1 = i &lt; j ? i : j;
            E[e_count].point2 = j &gt; i ? j : i;
            E[e_count].weight = a;
            if (a) e_count++;
        }

        printf(&quot;Case %d:\n&quot;,k);
        kruskal(n, e_count);
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