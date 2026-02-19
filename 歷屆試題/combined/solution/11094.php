<!DOCTYPE html>
<html>
<head>
<title>uva11094</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11094</h1>
<pre class="prettyprint">
//uva11094
#include &lt;iostream&gt;
#include &lt;cstring&gt;
#define MAX 21

using namespace std;

int row, col, kingX, kingY, landNum, ans;
int path[MAX][MAX];
int dir[4][2] = {{0, 1}, {1, 0}, {-1, 0}, {0, -1}};
char map[MAX][MAX], landMark;

// DFS mark the path
void findLand(int i, int j) {
	// column must be linked the start and end
	if(j &lt; 0)
		j = col - 1;
	if(j &gt;= col)
		j = 0;
	
	// find the end of row
	if(i &lt; 0 || i &gt;= row)
		return ;
	
	// has found or not land
	if(path[i][j] != 0 || map[i][j] != landMark)
		return ;
	
	// mark as found
	path[i][j] = 1;
	landNum++;
	
	// find the next point (DFS)
	for(int k = 0; k &lt; 4; k++)
		findLand(i + dir[k][0], j + dir[k][1]);	
}

int main() {
	// get the row and column (next input data)
	while(cin &gt;&gt; row &gt;&gt; col) {
		// get map
		for(int i = 0; i &lt; row; i++)
			cin &gt;&gt; map[i];
		
		// get king point and what mark is land
		cin &gt;&gt; kingX &gt;&gt; kingY;
		landMark = map[kingX][kingY];
		
		// initialize
		ans = 0;
		landNum = 0;
		memset(path, 0, sizeof(path));
		
		// set the king city as marked (don&#39;t calculate the king city)
		findLand(kingX, kingY);
		
		// start finding
		for(int i = 0; i &lt; row; i++) {
			for(int j = 0; j &lt; col; j++) {
				// check each point for DFS
				landNum = 0;
				findLand(i, j);
				
				// find the biggest city without king city
				if(ans &lt; landNum)
					ans = landNum;
			}
		}
		
		// output
		cout &lt;&lt; ans &lt;&lt; endl;
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