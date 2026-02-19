<!DOCTYPE html>
<html>
<head>
<title>uva532</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva532</h1>
<pre class="prettyprint">
//uva532
#include &lt;iostream&gt;
#include &lt;cstdio&gt;

#define Max 31

using namespace std;

class node {
public:
	int x, y, z;

	node() {
		x = y = z = 0;
	}
	void set(int a, int b, int c) {
		x = a;
		y = b;
		z = c;
	}
}root, end;


char map[Max][Max][Max];
bool done[Max][Max][Max];
int path[Max][Max][Max];
class node que[30000];

void insert(int x, int y, int z, int &amp;cnt, int dep) {
	que[cnt].set(x, y, z);
	path[x][y][z] = dep+1;
	done[x][y][z] = true;
	cnt++;
}

int main() {
	int L, R, C;
	int i, j, k;
	while(cin &gt;&gt; L &gt;&gt; R &gt;&gt; C &amp;&amp; L) {
		for(i = 0; i &lt; Max; i++)
			for(j = 0; j &lt; Max; j++)
				for(k = 0; k &lt; Max; k++)
					map[i][j][k] = done[i][j][k] = path[i][j][k] = 0;

		for(i = 0; i &lt; L; i++)
			for(j = 0; j &lt; R; j++) {
				scanf(&quot;%s&quot;, map[i][j]);
				for(k = 0; k &lt; C; k++)
				{
					if(map[i][j][k] == &#39;S&#39;)
						root.set(i, j, k);
					else if(map[i][j][k] == &#39;E&#39;)
						end.set(i, j, k);
				}
			}

		que[0] = root;
		int head = 0, tail = 1, dep = 0;
		while(head &lt; tail) {
			int tx = que[head].x, ty = que[head].y, tz = que[head].z, td = path[tx][ty][tz];

			if(tx &gt; 0 	&amp;&amp; !done[tx-1][ty][tz] &amp;&amp; map[tx-1][ty][tz] != &#39;#&#39;)	insert(tx-1, ty  , tz  , tail, td);
			if(tx &lt; L-1	&amp;&amp; !done[tx+1][ty][tz] &amp;&amp; map[tx+1][ty][tz] != &#39;#&#39;)	insert(tx+1, ty  , tz  , tail, td);
			if(ty &gt; 0	&amp;&amp; !done[tx][ty-1][tz] &amp;&amp; map[tx][ty-1][tz] != &#39;#&#39;)	insert(tx  , ty-1, tz  , tail, td);
			if(ty &lt; R-1	&amp;&amp; !done[tx][ty+1][tz] &amp;&amp; map[tx][ty+1][tz] != &#39;#&#39;)	insert(tx  , ty+1, tz  , tail, td);
			if(tz &gt; 0	&amp;&amp; !done[tx][ty][tz-1] &amp;&amp; map[tx][ty][tz-1] != &#39;#&#39;)	insert(tx  , ty  , tz-1, tail, td);
			if(tz &lt; C-1	&amp;&amp; !done[tx][ty][tz+1] &amp;&amp; map[tx][ty][tz+1] != &#39;#&#39;)	insert(tx  , ty  , tz+1, tail, td);

			head++;
		}

		if(path[end.x][end.y][end.z] &gt; 0)
			printf(&quot;Escaped in %d minute(s).\n&quot;, path[end.x][end.y][end.z]);
		else
			printf(&quot;Trapped!\n&quot;);
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