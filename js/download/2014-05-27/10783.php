<!DOCTYPE html>
<html>
<head>
<title>uva10783</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10783</h1>
<pre class="prettyprint">
//uva10783
#include &lt;iostream&gt;

using namespace std;

int main() {
	int t, ti = 0;
	cin &gt;&gt; t;
	int arr[101] = {};
	for(int i = 1; i &lt; 101; ++i) {
		if(i % 2 == 1)
			arr[i] = i;
		arr[i] += arr[i-1];
	}
	while(ti++ &lt; t) {
		int a, b;
		cin &gt;&gt; a &gt;&gt; b;

		if(a == 0)
			a = 1;

		cout &lt;&lt; &quot;Case &quot; &lt;&lt; ti &lt;&lt; &quot;: &quot; &lt;&lt; arr[b] - arr[a-1] &lt;&lt; endl;
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