<!DOCTYPE html>
<html>
<head>
<title>uva458</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva458</h1>
<pre class="prettyprint">
//uva458
#include &lt;iostream&gt;
#include &lt;algorithm&gt;
#include &lt;stdio.h&gt;
#include &lt;iomanip&gt;
using namespace std;
int main(){
	string input;
	while(getline(cin,input)){
		for(int i = 0;i &lt; input.length();i++)
			input[i] -= 7;
		for(int i = 0;i &lt; input.length();i++)
			cout&lt;&lt;input[i];
		cout&lt;&lt;endl;
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