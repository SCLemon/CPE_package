<!DOCTYPE html>
<html>
<head>
<title>uva12532</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12532</h1>
<pre class="prettyprint">
//uva12532
#include&lt;iostream&gt;
#include&lt;cmath&gt;
using namespace std;

int tree[1000001] = {1}, ll[1000001] = {1}, rr[1000001] = {1};

int ask(int l, int r, int pos){
	if (l == rr[pos] &amp;&amp; r == ll[pos]) return tree[pos];
	else if (l &gt; ll[pos * 2]) return ask(l, r, pos * 2 + 1);
	else if (r &lt;= ll[pos * 2]) return ask(l, r, pos * 2);
	else return ask(l, ll[pos * 2], pos * 2) * ask(rr[pos * 2 + 1], r, pos * 2 + 1);
}

int main(){
	int i, N, K, count, ans, para[2];
	char instruct;
	while (cin &gt;&gt; N){
		cin &gt;&gt; K;
		int layer = (int)(log(N)/log(2)+1);
		if (pow(2,layer-1) &lt; N) layer++;
		for (i = pow(2, layer - 1); i &lt; pow(2, layer - 1) + N; i++){
			cin &gt;&gt; tree[i];
			if (tree[i] &gt; 0) tree[i] = 1;
			else if (tree[i] &lt; 0) tree[i] = -1;
			else tree[i] = 0;
			ll[i] = i - pow(2, layer - 1) + 1;
			rr[i] = i - pow(2, layer - 1) + 1;
		}
		for (i = pow(2, layer - 1) + N; i &lt; pow(2, layer); i++){
			tree[i] = 1;
			ll[i] = i - pow(2, layer - 1) + 1;
			rr[i] = i - pow(2, layer - 1) + 1;
		}
		for (i = pow(2, layer - 1) - 1; i &gt;= 1; i--){
			tree[i] = tree[i * 2] * tree[i * 2 + 1];
			ll[i] = ll[i * 2 + 1];
			rr[i] = rr[i * 2];
		}

		while (K--){
			cin &gt;&gt; instruct &gt;&gt; para[0] &gt;&gt; para[1];
			if (instruct == &#39;C&#39;){
				if (para[1] &gt; 0) tree[(int)pow(2, layer - 1) + para[0] - 1] = 1;
				else if (para[1] &lt; 0) tree[(int)pow(2, layer - 1) + para[0] - 1] = -1;
				else tree[(int)pow(2, layer - 1) + para[0] - 1] = 0;

				for (i = ((int)pow(2, layer - 1) + para[0] - 1) / 2; i &gt;= 1; i /= 2){
					tree[i] = tree[i * 2] * tree[i * 2 + 1];
				}
			}
			else {
				ans = ask(para[0], para[1], 1);
				if (ans &gt; 0) cout &lt;&lt; &#39;+&#39;;
				else if (ans &lt; 0) cout &lt;&lt; &#39;-&#39;;
				else cout &lt;&lt; &#39;0&#39;;
			}
		}
		cout &lt;&lt; endl;
	}
	return 0;
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