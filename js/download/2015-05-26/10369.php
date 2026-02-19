<!DOCTYPE html>
<html>
<head>
<title>uva10369</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10369</h1>
<pre class="prettyprint">
//uva10369
#include &lt;cstdio&gt;
#include &lt;cmath&gt;
#include &lt;algorithm&gt;
#include &lt;iostream&gt;
#define MAXV (500+1)
#define MAXE (500*500+1)

using namespace std;

double x[MAXV], y[MAXV];
int S, P, E, totS;
int fa[MAXV];

struct edge{
	int n1, n2;
	double dis;
	void init (int n1, int n2) {
		this-&gt;n1 = n1;
		this-&gt;n2 = n2;
		dis = sqrt((x[n1] - x[n2]) * (x[n1] - x[n2]) + (y[n1] - y[n2]) * (y[n1] - y[n2]));
	}
}e[MAXE];

bool ecmp (edge e1, edge e2) {
	return e1.dis &lt; e2.dis;
}

int find_set(int n) {
	if (fa[n] == n)
		return n;
	else
		return fa[n] = find_set(fa[n]);
}

void union_set(int x, int y) {
	int rx = find_set(x);
	int ry = find_set(y);
	if (rx != ry) {
		fa[ry] = rx;
		totS --;
	}
}


double kruskal() {
	int i, n1, n2;
	double ans = 0;
	for (i = 0; i &lt; E &amp;&amp; totS &gt; S; i++) {
		n1 = e[i].n1;
		n2 = e[i].n2;
		union_set(n1, n2);
		ans = max(ans, e[i].dis);
	}
	return ans;
}

int main() {
	int i, j, t;
	scanf(&quot;%d&quot;, &amp;t);
	while (t --) {
		scanf(&quot;%d %d&quot;, &amp;S, &amp;P);
		for (i = 0; i &lt; P; i++)
			scanf(&quot;%lf %lf&quot;,&amp;x[i],&amp;y[i]);
		for (E = 0, i = 0; i &lt; P; i++)
			for (j = i + 1; j &lt; P; j++)
				e[E++].init(i, j);

		totS = P;
		sort(e,e + E,ecmp);
		for (i = 0; i &lt; P; i++)
				fa[i] = i;
		printf(&quot;%.2lf\n&quot;,kruskal());
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