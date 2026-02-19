<!DOCTYPE html>
<html>
<head>
<title>uva105</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva105</h1>
<pre class="prettyprint">
//uva105
#include &lt;iostream&gt;
#include &lt;sstream&gt;
#include &lt;string&gt;
#define MAX 10000

using namespace std;

int main() {
	int l, h, r, build[MAX + 1];
	stringstream intToString;
	string ans;
	
	// initialize
	for(int i = 0; i &lt;= MAX; i++)
		build[i] = 0;
	
	// get input
	while(cin &gt;&gt; l &gt;&gt; h &gt;&gt; r) {
		// mark the high value in each x-axis
		for(int i = l; i &lt; r; i++) {
			if(build[i] &lt; h)
				build[i] = h;
		}
	}
	
	// save the answer
	if(build[0] != 0)
		intToString &lt;&lt; 0 &lt;&lt; &#39; &#39; &lt;&lt; build[0] &lt;&lt; &#39; &#39;;
	for(int i = 1; i &lt;= MAX; i++) {
		if(build[i] != build[i - 1])
			intToString &lt;&lt; i &lt;&lt; &#39; &#39; &lt;&lt; build[i] &lt;&lt; &#39; &#39;;
	}
	
	// output the answer
	getline(intToString, ans);
	ans.erase(ans.length() - 1);
	cout &lt;&lt; ans &lt;&lt; endl;
	
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