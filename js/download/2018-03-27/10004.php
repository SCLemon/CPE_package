<!DOCTYPE html>
<html>
<head>
<title>uva10004</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10004</h1>
<pre class="prettyprint">
//uva10004
#include &lt;stdio.h&gt;

#define MAX_NODE 200

int dfs(char map[MAX_NODE][MAX_NODE], char color[MAX_NODE], int n, int start){
	for(int i = 0; i &lt; n; i++)
		if(map[start][i])
			if(color[start] == color[i])
				return 0;
			else if(color[i] == 0){
				color[i] = -color[start];
				if(!dfs(map, color, n, i))
					return 0;
			}

	return 1;
}

int main(){
	int n;
	while(scanf(&quot;%d&quot;, &amp;n), n){
		int m;
		int x, y;
		char map[MAX_NODE][MAX_NODE] = {};
		char color[MAX_NODE] = {};

		scanf(&quot;%d&quot;, &amp;m);

		for(int i = 0;i &lt; m; i++){
			scanf(&quot;%d %d&quot;, &amp;x, &amp;y);
			map[x][y] = map[y][x] = 1;
		}

		for(int i = 0;i &lt; n; i++)
			if(!color[i]){
				color[i] = 1;
				if(!dfs(map, color, n, i)){
					printf(&quot;NOT &quot;);
					break;
				}
			}

		printf(&quot;BICOLORABLE.\n&quot;);
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