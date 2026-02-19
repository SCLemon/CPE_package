<!DOCTYPE html>
<html>
<head>
<title>uva10908</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10908</h1>
<pre class="prettyprint">
//uva10908
#include &lt;iostream&gt;
#include &lt;cstring&gt;
#include &lt;cstdio&gt;
#define Max 101

using namespace std;

char map[Max][Max];
int LU[Max][Max], RU[Max][Max], LD[Max][Max], RD[Max][Max];

int f(int r, int c, int x, int y) {
	if(map[r][c] == map[r+x][c+y] &amp;&amp; map[r][c] == map[r+x][c] &amp;&amp; map[r][c] == map[r][c+y])
		return 1;
	else
		return 0;
}

void count(int m, int n) {
	int i, j;
	for(i = 0; i &lt; m; ++i) {
		for(j = 0; j &lt; n; ++j) {
			if(i == 0 || j == 0)
				LU[i][j] = 1;
			else
				LU[i][j] = f(i, j, -1, -1) ? min(LU[i-1][j-1], min(LU[i-1][j], LU[i][j-1])) + 1 : 1;
		}
	}

	for(i = 0; i &lt; m; ++i) {
		for(j = n - 1; j &gt;= 0; --j) {
			if(i == 0 || j == n - 1)
				RU[i][j] = 1;
			else
				RU[i][j] = f(i, j, -1, 1) ? min(RU[i-1][j+1], min(RU[i-1][j], RU[i][j+1])) + 1 : 1;
		}
	}

	for(i = m - 1; i &gt;= 0; --i) {
		for(j = 0; j &lt; n; ++j) {
			if(i == m - 1 || j == 0)
				LD[i][j] = 1;
			else
				LD[i][j] = f(i, j, 1, -1) ? min(LD[i+1][j-1], min(LD[i+1][j], LD[i][j-1])) + 1 : 1;
		}
	}

	for(i = m - 1; i &gt;= 0; --i) {
		for(j = n - 1; j &gt;= 0; --j) {
			if(i == m - 1 || j == n - 1)
				RD[i][j] = 1;
			else
				RD[i][j] = f(i, j, 1, 1) ? min(RD[i+1][j+1], min(RD[i+1][j], RD[i][j+1])) + 1 : 1;
		}
	}
}

int main()
{
	int t;

	cin &gt;&gt; t;
	while(t--)
	{
		int m, n, q, i;
		cin &gt;&gt; m &gt;&gt; n &gt;&gt; q;

		memset(map, 0, sizeof(map));
		memset(LU, 0, sizeof(LU));
		memset(LD, 0, sizeof(LD));
		memset(RU, 0, sizeof(RU));
		memset(RD, 0, sizeof(RD));

		for(i = 0; i &lt; m; ++i)
			cin &gt;&gt; map[i];

		count(m, n);

		cout &lt;&lt; m &lt;&lt; &quot; &quot; &lt;&lt; n &lt;&lt; &quot; &quot; &lt;&lt; q &lt;&lt; endl;
		for(i = 0; i &lt; q; ++i)
		{
			int r, c;
			cin &gt;&gt; r &gt;&gt; c;
			cout &lt;&lt; min(min(LU[r][c], LD[r][c]), min(RU[r][c], RD[r][c])) * 2 - 1 &lt;&lt; endl;
		}
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