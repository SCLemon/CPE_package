<!DOCTYPE html>
<html>
<head>
<title>uva10397</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10397</h1>
<pre class="prettyprint">
//uva10397
#include &lt;cstdio&gt;
#include &lt;cmath&gt;
#include &lt;algorithm&gt;
#define B 751

struct Coord
{
    int x, y;
    inline double getLength(Coord &amp;a);
};
struct Edge
{
    //兩建築物和之間的距離
    int a, b;
    double w;
};

int p[B];
Edge edge[300000];
inline void init(int n);
inline int find(int a);
inline void Union(int a, int b);
double kruskal(int N, int E); //(須連幾條邊,總共有幾個邊)
int main()
{
    int N, M, i;
    Coord building[B];

    while (scanf(&quot;%d&quot;, &amp;N) != EOF)
    {
        for (i = 1; i &lt;= N; i++)
            scanf(&quot;%d%d&quot;, &amp;building[i].x, &amp;building[i].y);

        // init disjoint-set
        init(N);

        int a, b, connect = 0;
        scanf(&quot;%d&quot;, &amp;M);
        for (i = 0; i &lt; M; i++)
        {
            scanf(&quot;%d%d&quot;, &amp;a, &amp;b);
            if (find(a) != find(b))
            {
                Union(a, b);
                connect++; //已經連接好的線
            }
        }

        int E = 0;
        for (i = 1; i &lt;= N; i++)
            for (int j = i + 1; j &lt;= N; j++)
            {
                if (find(i) != find(j)) //判斷是否會因原本接好的成為環
                {
                    edge[E].a = i;
                    edge[E].b = j;
                    edge[E++].w = building[i].getLength(building[j]);
                }
            }

        printf(&quot;%.2lf\n&quot;, kruskal(N - connect - 1, E));
    }

    return 0;
}
void init(int n)
{
    for (int i = 0; i &lt;= n; i++)
        p[i] = i;
}
int find(int a)
{
    return a == p[a] ? a : (p[a] = find(p[a]));
}
void Union(int a, int b)
{
    p[find(a)] = find(b);
}
double Coord::getLength(Coord &amp;a)
{
    //勾股定理
    double xx = (double)(x - a.x) * (x - a.x);
    double yy = (double)(y - a.y) * (y - a.y);

    return sqrt(xx + yy);
}
double kruskal(int n, int E)
{
    std::sort(edge, edge + E, [](const Edge &amp;a, const Edge &amp;b) -&gt; bool
              { return a.w &lt; b.w; });

    double cost = 0;
    for (int i = 0, e = 0; i &lt; E &amp;&amp; e &lt; n; i++, e++)
    {
        while (find(edge[i].a) == find(edge[i].b))
            i++;

        Union(edge[i].a, edge[i].b);

        cost += edge[i].w;
    }

    return cost;
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->