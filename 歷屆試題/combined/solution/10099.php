<!DOCTYPE html>
<html>
<head>
<title>uva10099</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10099</h1>
<pre class="prettyprint">
//uva10099
#include &lt;iostream&gt;
#include &lt;cstdio&gt;

using namespace std;

int main() {
	int n, ti = 0, m;
	while(cin &gt;&gt; n &gt;&gt; m &amp;&amp; n) {
		int x, y, d;
		int map[101][101] = {};
		for(int i = 0; i &lt; m; i++) {
			cin &gt;&gt; x &gt;&gt; y &gt;&gt; d;
			map[x][y] = d-1;
			map[y][x] = d-1;
		}

		for(int k = 1; k &lt;= n; k++)
			for(int i = 1; i &lt;= n; i++)
				for(int j = 1; j &lt;= n; j++)
					if(map[i][k] &amp;&amp; map[k][j] &amp;&amp; map[i][k] &gt; map[i][j] &amp;&amp; map[k][j] &gt; map[i][j])
						map[i][j] = min(map[i][k], map[k][j]);
		
		cin &gt;&gt; x &gt;&gt; y &gt;&gt; d;
		int ans;
		if(d % map[x][y])
			ans = d / map[x][y] + 1;
		else
			ans = d / map[x][y];

		printf(&quot;Scenario #%d\n&quot;, ++ti);
		printf(&quot;Minimum Number of Trips = %d\n\n&quot;, ans);

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