<!DOCTYPE html>
<html>
<head>
<title>uva242</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva242</h1>
<pre class="prettyprint">
//uva242
#include &lt;cstdlib&gt;
#include &lt;algorithm&gt;  
#include &lt;cstring&gt; 
#include &lt;vector&gt;
#include &lt;cstdio&gt;    
#include &lt;iostream&gt; 

using namespace std;

const int maxn = 1010;
struct node{
	vector&lt;int&gt; a;
	bool operator &lt; (const node&amp; rhs) const {
		if (a.size() &lt; rhs.a.size()) return true;
		else if (a.size() == rhs.a.size()) {
			for (int i = 0; i &lt; a.size(); i++) {
				if (a[i] &lt; rhs.a[i])
					return 1;
				if (a[i] &gt; rhs.a[i])
					return 0;
			}
			return false;
		}
		return false;
	}
}plan[100];

bool d[maxn][11], vis[maxn][11];
int s, n, MAX[maxn];

int dp(int i, int j, int k) {
	if (vis[i][j])
		return d[i][j];
	vis[i][j] = true;
	if (i == 0)
		return d[i][j] = 1;
	d[i][j] = false;
	for (int g = 0; g &lt; plan[k].a.size(); g++) {
		int fee = plan[k].a[g];
		if (i &gt;= fee &amp;&amp; j &gt; 0 &amp;&amp; dp(i - fee, j - 1, k))
			d[i][j] = true;
	}
	return d[i][j];
}

int CMP(const int a, const int b){
	return  a &gt; b;
}

int main(void) {
	while (scanf(&quot;%d&quot;, &amp;s) &amp;&amp; s) {
		scanf(&quot;%d&quot;, &amp;n);
		for (int i = 0; i &lt; n; i++)
			plan[i].a.clear();
		for (int i = 0; i &lt; n; i++) {
			int m;
			scanf(&quot;%d&quot;, &amp;m);
			for (int j = 0; j &lt; m; j++) {
				int x;
				scanf(&quot;%d&quot;, &amp;x);
				plan[i].a.push_back(x);
			}
			sort(plan[i].a.begin(), plan[i].a.end(), CMP);
		}
		sort(plan, plan + n);
		int max_ = 0, posi = 0;
		for (int i = 0; i &lt; n; i++) {
			MAX[i] = 0;
			memset(vis, false, sizeof(vis));
			for (int j = 1;; j++) {
				if (!dp(j, s, i)) {
					MAX[i] = j - 1;
					break;
				}
			}
			if (max_ &lt; MAX[i])
				max_ = MAX[i]; posi = i;
		}
		printf(&quot;max coverage =%4d :&quot;, max_);
		for (int i = plan[posi].a.size() - 1; i &gt;= 0; i--)
			printf(&quot;%3d&quot;, plan[posi].a[i]);
		printf(&quot;\n&quot;);
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