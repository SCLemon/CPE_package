<!DOCTYPE html>
<html>
<head>
<title>uva820</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva820</h1>
<pre class="prettyprint">
//uva820
#include &lt;iostream&gt;
#include &lt;cstring&gt;
#include &lt;queue&gt;
#define M 105

using namespace std;

int adj[M][M];		// adjacency matrix

int Edmonds_Karp(int s, int t) {
	int f = 0;	  // max flow
	while (true) {  // break until path not found.
		// BFS
		int q[M];			  // BFS queue
		int Path[M];		   // Path for back trace
		int Head = 0, Tail = 0;

		memset(Path, -1, sizeof(Path));
		q[0] = s;
		Path[s] = s;	// Source, back trace end point
		Tail = 1;

		while(Head &lt; Tail &amp;&amp; Path[t] == -1) {
			for(int i = q[Head], j = 0; j &lt; M; ++j) {
				if(Path[j] == -1 &amp;&amp; adj[i][j] &gt; 0) {
					q[Tail] = j;
					Path[j] = i;
					++Tail;
				}
			}
			++Head;
		}

		// could find a path from s to t.
		if (Path[t] == -1)
			break;

		int df = 2147483647;
		// back tracing find minimum bandwidth
		int i = Path[t], j = t;
		while(i != j) {
			df = min(df, adj[i][j]);
			j = i;
			i = Path[j];
		}
		
		// refresh each link&#39;s bandwidth with Min.
		i = Path[t], j = t;
		while(i != j) {
			adj[i][j] -= df;
			adj[j][i] += df;
			j = i;
			i = Path[j];
		}
		f += df;
	}
	return f;
}

int main() {
	int n;
	int ti = 0;
	while(cin &gt;&gt; n &amp;&amp; n) {
		memset(adj, 0, sizeof(adj));
		int s, t, c;
		int x, y, b;
		cin &gt;&gt; s &gt;&gt; t &gt;&gt; c;

		for(int i = 0; i &lt; c; ++i) {
			cin &gt;&gt; x &gt;&gt; y &gt;&gt; b;

			// one pair might has multiple link, but all links are bi-connect
			// so combine their bandwidth.
			adj[x][y] += b;
			adj[y][x] += b;
		}

		cout &lt;&lt; &quot;Network &quot; &lt;&lt; ++ti &lt;&lt; endl;
		cout &lt;&lt; &quot;The bandwidth is &quot; &lt;&lt; Edmonds_Karp(s, t) &lt;&lt; &quot;.&quot; &lt;&lt; endl &lt;&lt; endl;
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