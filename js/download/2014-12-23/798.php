<!DOCTYPE html>
<html>
<head>
<title>uva798</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva798</h1>
<pre class="prettyprint">
//uva798
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#define N 15
#define W 105

using namespace std;

int w[N], h[N], m[N], n, ans;
bool puz[W][W];

bool valid(int nx, int ny, int nw, int nh) {
	if(nx+nw &gt; w[0] || ny+nh &gt; h[0]) return false;

	static int dx, dy;

	for(dx = nx; dx &lt; nx + nw; ++dx)
		for(dy = ny; dy &lt; ny + nh; ++dy)
			if(puz[dx][dy])
				return false;

	return true;
}

void setTile(int nx, int ny, int nw, int nh, bool val) {
	static int dx, dy;
	nw += nx;
	nh += ny;

	for(dx = nx ; dx &lt; nw; ++dx)
		for(dy = ny ; dy &lt; nh; ++dy)
			puz[dx][dy] = val;
}

void pmap(void) {
	static int x, y;

	for(x = 0; x &lt; w[0]; ++x) {
		for(y = 0; y &lt; h[0]; ++y)
			putchar(puz[x][y] ? &#39;X&#39;:&#39;_&#39;);
		putchar(&#39;\n&#39;);
	}
	putchar(&#39;\n&#39;);
}

void dfs(int nx, int ny) {

	if(ny == h[0]) {
		if(nx == w[0] - 1) {
			++ans;
			return;
		}
		else {
			++nx;
			ny = 0;
		}
	}

	int i;

	if(!puz[nx][ny]) {
		for(i = 1; i &lt;= n; ++i) {
			if(m[i]) {
				if(valid(nx, ny, w[i], h[i])) {
					setTile(nx, ny, w[i], h[i], true); --m[i];
					dfs(nx, ny + 1);
					setTile(nx, ny, w[i], h[i], false); ++m[i];
				}

				if(w[i] != h[i] &amp;&amp; valid(nx, ny, h[i], w[i])) {
					setTile(nx, ny, h[i], w[i], true); --m[i];
					dfs(nx, ny + 1);
					setTile(nx, ny, h[i], w[i], false); ++m[i];
				}
			}
		}
	}
	else
		dfs(nx, ny+1);
}

int main(void) {
	int i;

	while(scanf(&quot;%d%d%d&quot;, &amp;w[0], &amp;h[0], &amp;n) == 3) {

		// input
		for(i = 1; i &lt;= n; ++i)
			scanf(&quot;%d%d%d&quot;, &amp;m[i], &amp;w[i], &amp;h[i]);

		// initialize
		ans = 0;
		memset(puz, false, sizeof(puz));
		
		// solve
		dfs(0, 0);

		// output
		printf(&quot;%d\n&quot;, ans);

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