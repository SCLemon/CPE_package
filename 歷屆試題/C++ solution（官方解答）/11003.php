<!DOCTYPE html>
<html>
<head>
<title>uva11003</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11003</h1>
<pre class="prettyprint">
//uva11003
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
#include &lt;algorithm&gt;
#include &lt;cstring&gt;
#define MAX_N 1005
#define MAX_W 3005

using namespace std;


struct Box {
	int weight;
	int capacity;
};

Box boxes[MAX_N];
int n, dp[MAX_N][MAX_W];
int recurse(int capacity, int i);

int main() {
	while (cin &gt;&gt; n) {
		if (n == 0)
			return 0;
		for (int i = 0; i &lt; n; i++)
			cin &gt;&gt; boxes[i].weight &gt;&gt; boxes[i].capacity;
		memset(dp, -1, sizeof(dp));
		int lmax = 1;
		for (int i = 0; i &lt; n; i++) {
			lmax = max(recurse(boxes[i].capacity, i + 1) + 1, lmax);
		}
		cout &lt;&lt; lmax &lt;&lt; endl;
	}
}

int recurse(int capacity, int i) {
	if (i == n || !capacity)
		return 0;
	int &amp;memo = dp[i][capacity];
	if (memo != -1)
		return memo;
	if (boxes[i].weight &lt;= capacity)
		return memo = max(recurse(min(capacity - boxes[i].weight, boxes[i].capacity), i + 1) + 1,recurse(capacity, i + 1));
	else
		return memo = recurse(capacity, i + 1);
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->