<!DOCTYPE html>
<html>
<head>
<title>uva10036</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10036</h1>
<pre class="prettyprint">
//uva10036
#include &lt;iostream&gt;
#include &lt;cmath&gt;
using namespace std;

int main(){
	int n;
	cin &gt;&gt; n;
	for(int i = 0; i &lt; n; i++){
		int m, d;
		cin &gt;&gt; m &gt;&gt; d;
		int num[m];
		for(int j = 0 ; j &lt; m ; j++){
			cin &gt;&gt; num[j];
			num[j] = abs(num[j]) %d;
		}
		int f[m + 1][100] = {0};
		f[0][0] = 1;
		for(int j = 0 ; j &lt; m; j++)
			for(int k = 0 ; k &lt; d ; k++)
				if(f[j][k]){
					f[j + 1][(k + d + num[j]) % d] = 1;
					f[j + 1][(k + d - num[j]) % d] = 1;
				}
		cout &lt;&lt; (f[m][0] ? &quot;Divisible&quot; : &quot;Not divisible&quot;) &lt;&lt; endl;
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