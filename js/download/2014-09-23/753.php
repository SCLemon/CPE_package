<!DOCTYPE html>
<html>
<head>
<title>uva753</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva753</h1>
<pre class="prettyprint">
//uva753
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;string&gt;
#include &lt;map&gt;
#define MAXN 500

using namespace std;

typedef map&lt;string,int&gt; MSI;
typedef map&lt;string,string&gt; MSS;

int t, n, m, k, nCnt;
bool edge[MAXN][MAXN];
MSI socket;
MSS item;

bool vis[MAXN];
int pre[MAXN];

const bool path(int u) {
	int i;
	for(i = 1; i &lt;= n; ++i) {
		if(edge[u][i] &amp;&amp; !vis[i]) {
			vis[i] = true;
			if(!pre[i] || path(pre[i])) {
				pre[i] = u;
				return true;
			}
		}
	}
	return false;
}

const int maxMatch(void) {
	int ret = 0;
	memset(pre, 0, sizeof(pre));
	for(MSS::iterator it = item.begin(); it != item.end(); ++it) {
		memset(vis, false, sizeof(vis));
		if(path(socket[(*it).second])) ++ret;
	}
	return ret;
}

int main(void) {
	int i, j, x, y;
	string tmps1, tmps2;
	
	scanf(&quot;%d&quot;, &amp;t);

	while(t--) {
		scanf(&quot;%d&quot;, &amp;n);

		item.clear(); socket.clear();
		memset(edge, false, sizeof(edge));
		for(i = 1; i &lt;= n; ++i)
			cin &gt;&gt; tmps1; socket[tmps1] = i;
		
		scanf(&quot;%d&quot;, &amp;m);
		nCnt = n;
		for(i = 1; i &lt;= m; ++i) {
			cin &gt;&gt; tmps1 &gt;&gt; tmps2;
			item[tmps1] = tmps2;
			if(!socket[tmps2]) socket[tmps2] = ++nCnt;
		}
		scanf(&quot;%d&quot;, &amp;k);
		for(i = 1; i &lt;= k; ++i) {
			cin &gt;&gt; tmps1 &gt;&gt; tmps2;
			if(!socket[tmps1]) socket[tmps1] = ++nCnt;
			if(!socket[tmps2]) socket[tmps2] = ++nCnt;
			x = socket[tmps1]; y = socket[tmps2];
			edge[x][y] = true;
		}

		for(i = 1; i &lt;= nCnt; ++i)
			edge[i][i] = true;

		for(i = 1; i &lt;= nCnt; ++i)
			for(x = 1; x &lt;= nCnt; ++x)
				for(y = 1; y &lt;= nCnt; ++y)
					edge[x][y] |= (edge[x][i]&amp;edge[i][y]);

		printf(&quot;%d\n&quot;, m-maxMatch());

		if(t) putchar(&#39;\n&#39;);
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