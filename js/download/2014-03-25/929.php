<!DOCTYPE html>
<html>
<head>
<title>uva929</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva929</h1>
<pre class="prettyprint">
//uva929
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;queue&gt;
using namespace std;

int N = 1000;
int INF = 100000000;
int g[1000][1000], cost[1000][1000];
int r, c;

struct node {
	int x, y, w;
	bool operator &lt; (const struct node a) const {
	   return w &gt; a.w;
	}
} tl;

void dij() {
	int a, b;
	bool vis[1000][1000];
	priority_queue &lt;struct node&gt; pq;
	memset(vis, 0, sizeof(vis));
	g[1][1] = cost[1][1];
	tl.x = tl.y = 1, tl.w = g[1][1];
	pq.push(tl);
	while (!pq.empty()) {
		tl = pq.top();
		pq.pop();
		a = tl.x, b = tl.y;
		if (vis[a][b])
			continue;
		vis[a][b] = true;
		if (a &gt; 1 &amp;&amp; !vis[a - 1][b] &amp;&amp; g[a - 1][b] &gt; g[a][b] + cost[a - 1][b]) {
			g[a - 1][b] = g[a][b] + cost[a - 1][b];
			tl.x = a - 1;
			tl.y = b;
			tl.w = g[a - 1][b];
			pq.push(tl);
		}
		if (a &lt; r &amp;&amp; !vis[a + 1][b] &amp;&amp; g[a + 1][b] &gt; g[a][b] + cost[a + 1][b]) {
			g[a + 1][b] = g[a][b] + cost[a + 1][b];
			tl.x = a + 1;
			tl.y = b;
			tl.w = g[a + 1][b];
			pq.push(tl);
		}
		if (b &gt; 1 &amp;&amp; !vis[a][b - 1] &amp;&amp; g[a][b - 1] &gt; g[a][b] + cost[a][b - 1]) {
			g[a][b - 1] = g[a][b] + cost[a][b - 1];
			tl.x = a;
			tl.y = b - 1;
			tl.w = g[a][b - 1];
			pq.push(tl);
		}
		if (b &lt; c &amp;&amp; !vis[a][b + 1] &amp;&amp; g[a][b + 1] &gt; g[a][b] + cost[a][b + 1]) {
			g[a][b + 1] = g[a][b] + cost[a][b + 1];
			tl.x = a, tl.y = b + 1, tl.w = g[a][b + 1];
			pq.push(tl);
		}
	}
}

int main() {
	int T, i, j;
	scanf(&quot;%d&quot;, &amp;T);
	while (T--) {
		scanf(&quot;%d%d&quot;, &amp;r, &amp;c);
		for (i = 1; i &lt;= r; ++i) {
			for (j= 1; j &lt;= c; ++j) {
				scanf(&quot;%d&quot;, &amp;cost[i][j]);
				g[i][j] = INF;
			}
		}
		dij();
		printf(&quot;%d\n&quot;, g[r][c]);
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