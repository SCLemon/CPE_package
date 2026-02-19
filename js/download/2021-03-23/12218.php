<!DOCTYPE html>
<html>
<head>
<title>uva12218</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12218</h1>
<pre class="prettyprint">
//uva12218
#include &lt;iostream&gt;
#include &lt;string&gt;
#include &lt;cstring&gt;
#include &lt;cmath&gt;
#include &lt;set&gt;
#include &lt;algorithm&gt;
using namespace std;

int main(){
	// prime table, take really much time here
	static bool prime[9999999+1];
	fill(prime,prime + 9999999+1, true);
	prime[0] = prime[1] = false;
	double bound = sqrt(9999999.0) + 0.5;
	for(int i=2 ; i*i &lt; 9999999+1 ; ++i){
		for(int j=2 ; j*i &lt; 9999999+1 ; ++j){
			prime[i*j] = false;
		}
	}
	
	int n;
	cin &gt;&gt; n;
	while(n--){
		set&lt;int&gt; ansSet;
		string input;
		cin &gt;&gt; input;
		sort(input.begin(),input.end());
		// test bit by bit ( 2^n )
		for(int i=0 ; i &lt; (1 &lt;&lt; input.size()) ; ++i){
			string testCase = &quot;&quot;;
			for(int j=0 ; j &lt; input.size() ; ++j)
				if(i &amp; (1 &lt;&lt; j)) testCase += input[j];
			do{
				int num = atoi(testCase.c_str());
				if(!prime[num]) continue;
				if(ansSet.count(num)) continue;
				ansSet.insert(num);
			}while(next_permutation(testCase.begin(),testCase.end()));
		}
		cout &lt;&lt; ansSet.size() &lt;&lt; endl;
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