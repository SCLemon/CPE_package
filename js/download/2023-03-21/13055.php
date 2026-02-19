<!DOCTYPE html>
<html>
<head>
<title>uva13055</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva13055</h1>
<pre class="prettyprint">
//uva13055
#include &lt;iostream&gt;
#include &lt;string&gt;
#include &lt;stack&gt;
using namespace std;

int main() {
	int n;
	string s;
	stack&lt;string&gt; name;

	cin &gt;&gt; n;
	for (int i = 0; i &lt; n; ++i) {
		cin &gt;&gt; s;
		if (s[0] == &#39;S&#39;) {
			cin &gt;&gt; s;
			name.push(s);
		}
		else if (s[0] == &#39;K&#39;) {
			if (!name.empty()) 
				name.pop();
		}
		else {
			if (!name.empty())
				cout &lt;&lt; name.top() &lt;&lt; endl;
			else
				cout &lt;&lt; &quot;Not in a dream\n&quot;;
		}
	}

	return 0;
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->