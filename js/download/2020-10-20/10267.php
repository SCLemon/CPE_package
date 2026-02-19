<!DOCTYPE html>
<html>
<head>
<title>uva10267</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10267</h1>
<pre class="prettyprint">
//uva10267
#include &lt;bits/stdc++.h&gt;
using namespace std; 

class Graph{
	public:
		char G[256][256];  // 1 &lt;= M,N &lt;= 250
		int M,N;
		
		Graph(){
			for (int i = 0; i &lt; 256; ++i)
				for (int j = 0; j &lt; 256; ++j)
					G[i][j] = &#39;O&#39;;
		}
		
		void setPixel(int x, int y, int w, int h, char C){
			for (int i = y; i &lt; y+h; ++i)
				for (int j = x; j &lt; x+w; ++j)
					G[i][j] = C;
		}
		
		void output(){
			for (int i = 1; i &lt;= N; ++i){
				for (int j = 1; j &lt;= M; ++j)
					cout &lt;&lt; G[i][j];
				cout &lt;&lt; endl;
			}
		}
};

void DFS(Graph&amp; graph, int x, int y, char curPixel, char C){
	if (curPixel == C) return;
	graph.G[y][x] = C;
	
	if (x+1 &lt;= graph.M &amp;&amp; graph.G[y][x+1] == curPixel) DFS(graph,x+1,y,curPixel,C);
	if (x-1 &gt;= 1       &amp;&amp; graph.G[y][x-1] == curPixel) DFS(graph,x-1,y,curPixel,C);
	if (y+1 &lt;= graph.N &amp;&amp; graph.G[y+1][x] == curPixel) DFS(graph,x,y+1,curPixel,C);
	if (y-1 &gt;= 1       &amp;&amp; graph.G[y-1][x] == curPixel) DFS(graph,x,y-1,curPixel,C);
}

int main(){
	Graph graph;
	char cmd, C;
	int M, N, X1, Y1, X2, Y2; // X is column, Y is row
	string fileName, ignore;
	
	while ((cin &gt;&gt; cmd) &amp;&amp; cmd != &#39;X&#39;){
		switch (cmd){
			case &#39;I&#39;:
				cin &gt;&gt; M &gt;&gt; N; // M is column, N is row
				graph.M = M;
				graph.N = N;
			case &#39;C&#39;:
				graph.setPixel(1, 1, graph.M, graph.N, &#39;O&#39;);
				break;
			case &#39;L&#39;:
				cin &gt;&gt; X1 &gt;&gt; Y1 &gt;&gt; C;
				graph.setPixel(X1, Y1, 1, 1, C);
				break;
			case &#39;V&#39;:
				cin &gt;&gt; X1 &gt;&gt; Y1 &gt;&gt; Y2 &gt;&gt; C;
				graph.setPixel(X1, min(Y1,Y2), 1, abs(Y1-Y2)+1, C);
				break;
			case &#39;H&#39;:
				cin &gt;&gt; X1 &gt;&gt; X2 &gt;&gt; Y1 &gt;&gt; C;
				graph.setPixel(min(X1,X2), Y1, abs(X1-X2)+1, 1, C);
				break;
			case &#39;K&#39;:
				cin &gt;&gt; X1 &gt;&gt; Y1 &gt;&gt; X2 &gt;&gt; Y2 &gt;&gt; C;
//				leftX = min(X1,X2);
//				upY = min(Y1,Y2);
//				graph.setPixel(leftX,upY,abs(X1-X2)+1,abs(Y1-Y2)+1,C);
				graph.setPixel(X1, Y1, X2-X1+1, Y2-Y1+1, C);
				break;
			case &#39;F&#39;:
				// use DFS to modify the pixel
				cin &gt;&gt; X1 &gt;&gt; Y1 &gt;&gt; C;
				DFS(graph, X1, Y1, graph.G[Y1][X1], C);
				break;
			case &#39;S&#39;:
				cin &gt;&gt; fileName;
				cout &lt;&lt; fileName &lt;&lt; endl;
				graph.output();
				break;
			default:
				getline(cin,ignore);
				break;
		}
	}
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