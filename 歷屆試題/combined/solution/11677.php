<!DOCTYPE html>
<html>
<head>
<title>uva11677</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11677</h1>
<pre class="prettyprint">
//uva11677
#include &lt;iostream&gt;
using namespace std;

int main(){
	int a, b, c, d;
	while((cin &gt;&gt; a &gt;&gt; b &gt;&gt; c &gt;&gt; d)){
		if(a == b &amp;&amp; b == c &amp;&amp; c == d &amp;&amp; d == 0)
			break;
		else if(a &gt; c || (a == c &amp;&amp; b &gt; d))
			cout &lt;&lt; 1440 - ((60 * a + b) - (60 * c + d)) &lt;&lt; endl;
		else
			cout &lt;&lt; (60 * c + d) - (60 * a + b) &lt;&lt; endl;
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