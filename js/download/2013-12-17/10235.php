<!DOCTYPE html>
<html>
<head>
<title>uva10235</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10235</h1>
<pre class="prettyprint">
//uva10235
#include&lt;iostream&gt;
using namespace std;

int com[1000000];
int main() {
	for(int i = 2; i &lt; 1000; i++) {
		if(com[i])
			continue;
		for(int j = i + i; j &lt; 1000000; j += i)
			com[j] = 1;
	}
	int n, rn;
	while(cin &gt;&gt; n) {
		int sn = n; 
		for(rn = 0; n; n /= 10) rn = rn * 10 + (n % 10);
		if(com[sn]) cout &lt;&lt; sn &lt;&lt; &quot; is not prime.&quot;;
		else if(com[rn]) cout &lt;&lt; sn &lt;&lt; &quot; is prime.&quot;;
		else if(sn == rn) cout &lt;&lt; sn &lt;&lt; &quot; is prime.&quot;;
		else cout &lt;&lt; sn &lt;&lt; &quot; is emirp.&quot;;
		cout &lt;&lt; endl;
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