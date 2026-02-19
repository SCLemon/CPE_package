<!DOCTYPE html>
<html>
<head>
<title>uva948</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva948</h1>
<pre class="prettyprint">
//uva948
#include&lt;iostream&gt;
using namespace std;

int main() {
	int f[40] = {0, 1};
	for(int k = 2; k &lt; 40; k++)
	  f[k] = f[k - 1] + f[k - 2];
	int n;
	cin &gt;&gt; n;
	while(n--) {
		int m;
		cin &gt;&gt; m;
		cout &lt;&lt; m &lt;&lt; &quot; = &quot;;
		bool preone = false;
		for(int k = 39; k &gt;= 2; k--) {
			if(m &gt;= f[k]) {
				cout &lt;&lt; &quot;1&quot;;
				m -= f[k];
				preone = true;
			}
			else if(preone) {
				cout &lt;&lt; &quot;0&quot;;
			}
		}
		cout &lt;&lt; &quot; (fib)&quot; &lt;&lt; endl;
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