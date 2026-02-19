<!DOCTYPE html>
<html>
<head>
<title>uva12602</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12602</h1>
<pre class="prettyprint">
//uva12602
#include &lt;iostream&gt;
#include &lt;cstdlib&gt;
using namespace std;

inline int deA(char c) {return c - &#39;A&#39;;}

int main(){
	int case_n;
	cin &gt;&gt; case_n;
	while(case_n--) {
		char input[9];
		cin &gt;&gt; input;
		int scoreA = deA(input[0]) * 26 * 26 + deA(input[1]) * 26 + deA(input[2]);
		int scoreB = atoi(input + 4);
		if(abs(scoreA - scoreB) &lt;= 100)
			cout &lt;&lt; &quot;nice\n&quot;;
		else
			cout &lt;&lt; &quot;not nice\n&quot;;
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