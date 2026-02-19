<!DOCTYPE html>
<html>
<head>
<title>uva10074</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10074</h1>
<pre class="prettyprint">
//uva10074
#include&lt;iostream&gt;
#include &lt;stdio.h&gt;
using namespace std;
int main(){
	int M, N, i, j, k, max;
	while(cin &gt;&gt; M &gt;&gt; N){
		if(M == 0 || N == 0)
            break;
		int map[M][N], input;
		max = 0;
		for(i = 0; i &lt; M; i++){
			for(j = 0; j &lt; N; j++){
				cin &gt;&gt; input;
				map[i][j] = (input == 1) ? 0 : ((i &gt; 0) ? (map[i-1][j] + 1) : 1);
			}
			for(j = 0; j &lt; N; j++){
				int sum = map[i][j];
				for(k = j-1; k &gt;= 0 &amp;&amp; map[i][k] &gt;= map[i][j]; k--) sum += map[i][j];
				for(k = j+1; k &lt; N &amp;&amp; map[i][k] &gt;= map[i][j]; k++) sum += map[i][j];
				max = (max &gt; sum) ? max : sum;
			}
		}
		cout &lt;&lt; max &lt;&lt; endl;
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