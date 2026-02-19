<!DOCTYPE html>
<html>
<head>
<title>uva11536</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>ç¯„ä¾‹ç¨‹å¼ç¢¼ uva11536</h1>
<pre class="prettyprint">
//uva11536
#include &lt;bits/stdc++.h&gt;
using namespace std;

int table[1000001] = {0,1,2,3};

int main(){
//	freopen(&quot;out11536.txt&quot;,&quot;w&quot;,stdout);
	int T;
	cin &gt;&gt; T;
	int N,M,K,Case=0;
	
	while(T--){
		// 2 &lt; N &lt; 1000001, 0 &lt; M &lt; 1001, 1 &lt; K &lt; 101
		cin &gt;&gt; N &gt;&gt; M &gt;&gt; K;
		
		for(int i=4 ; i &lt; N ; ++i)
			table[i] = (table[i-3] + table[i-2] + table[i-1])%M + 1;
				
		int cur;
		int ans = 1000001;
		int sumK = 0;
		int check[101] = {0};
		queue&lt;int&gt; Q;
		for(int i=1 ; i &lt;= N ; ++i){
			cur = table[i];
			if(1 &lt;= cur &amp;&amp; cur &lt;= K){
				Q.push(i);
				if(!check[cur]) ++sumK;
				check[cur] = i;  // store the newest of every element [1,K]
				// «á­±¦³·s¥[¤Jªº¤p¼Æ¦r¡A´N®³±¼«e­±ªº 
				while(Q.front() != check[table[Q.front()]])
					Q.pop();
				if(sumK == K){
					ans = min(ans,i-Q.front()+1);
				}
			}
		}
		cout &lt;&lt; &quot;Case &quot; &lt;&lt; ++Case &lt;&lt; &quot;: &quot;;
		if(sumK == K){
			cout &lt;&lt; ans &lt;&lt; endl;
		}else{
			cout &lt;&lt; &quot;sequence nai&quot; &lt;&lt; endl;
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