<!DOCTYPE html>
<html>
<head>
<title>uva315</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva315</h1>
<pre class="prettyprint">
//uva315
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;cstdlib&gt;
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
using namespace std;

const int N = 100;
vector&lt;int&gt; a[N];
bool flag[N], ap[N];
int d[N], low[N];
int n, c, subtree;

void DFS(int u) {
	flag[u] = true;
	low[u] = d[u] = ++c;
	for (vector&lt;int&gt;::iterator it = a[u].begin(); it != a[u].end(); ++it) {
		if (!flag[*it]) {
			DFS(*it);
			low[u] = min(low[u], low[*it]);
			if (low[*it] &gt;= d[u]) {
				if (u != 0)
					ap[u] = true;
				else subtree++;
			}
		}
		else low[u] = min(low[u], d[*it]);
	}
}

bool g[N][N];
char buf[1000], t[100];

int main() {
	int i, j, x, y;
	while (scanf(&quot;%d&quot;, &amp;n), n) {
		memset(g, 0, sizeof(g));
		while (scanf(&quot;%d&quot;, &amp;x), x) {
			gets(buf);
			for (i = 0; buf[i] == &#39; &#39;; i++);
			for (; buf[i]; i += j + 1) {
				for (j = 0; buf[i + j] &amp;&amp; buf[i + j] != &#39; &#39;; j++);
				strncpy(t, buf + i, j);
				t[j] = &#39;\0&#39;;
				y = atoi(t);
				g[x - 1][y - 1] = g[y - 1][x - 1] = true;
				if (buf[i + j] == &#39;\0&#39;) break;
			}
		}
		
		for (i = 0; i &lt; n; i++) {
			a[i].clear();
			for (j = 0; j &lt; n; j++)
				if (g[i][j]) a[i].push_back(j);
		}
		
		memset(flag, 0, sizeof(flag));
		memset(ap, 0, sizeof(ap));
		subtree = 0;
		c = 0;
		DFS(0);
		if (subtree &gt; 1) ap[0] = true;
		int sum = 0;
		for (i = 0; i &lt; n; i++)
			if (ap[i]) sum++;
		printf(&quot;%d\n&quot;, sum);
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