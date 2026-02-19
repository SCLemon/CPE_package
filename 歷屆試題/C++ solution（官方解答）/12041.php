<!DOCTYPE html>
<html>
<head>
<title>uva12041</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12041</h1>
<pre class="prettyprint">
//uva12041
#include &lt;iostream&gt;
using namespace std;

long long int FN[49];
void printout(long long int n, long long int st, long long int ed);
int main() {
	FN[0] = 1;
	FN[1] = 1;
	for(int i = 2;i &lt; 49;i++)
		FN[i] = FN[i - 2] + FN[i - 1];

	int m;
	cin &gt;&gt; m;
	for(int i = 0;i &lt; m;i++){
		long long int n, st, ed;
		cin &gt;&gt; n &gt;&gt; st &gt;&gt; ed;
		if(n &gt;= 48)
			n = 48 - (n % 2);
		printout(n, st, ed);
		cout &lt;&lt; endl;
	}
	return 0;
}
void printout(long long int n, long long int st, long long int ed){
	if(n == 0 || n == 1)
		cout &lt;&lt; n;
	else{
		if(st &lt; FN[n - 2] &amp;&amp; ed &lt; FN[n - 2]){
			printout(n - 2, st, ed);
		}else if(st &lt; FN[n - 2] &amp;&amp; FN[n - 2] &lt;= ed){
			printout(n - 2, st, FN[n - 2] - 1);
			printout(n - 1, 0, ed - FN[n - 2]);
		}else{//FN[n - 2] &lt;= st &amp;&amp; FN[n - 2] &lt;= ed
			printout(n - 1, st - FN[n - 2], ed - FN[n - 2]);
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