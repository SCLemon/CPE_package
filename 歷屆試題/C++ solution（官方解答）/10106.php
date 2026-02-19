<!DOCTYPE html>
<html>
<head>
<title>uva10106</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10106</h1>
<pre class="prettyprint">
//uva10106
#include&lt;iostream&gt;
#include&lt;cstdio&gt;

using namespace std;

int main() {
	string input;
	int X[255] = {0}, Y[255] = {0};
	int xlen, ylen, anslen;
	while(getline(cin, input)) {
		xlen = input.length();
		for(int i = 0; i &lt; xlen; i++)
			X[i] = input[xlen - i - 1] - &#39;0&#39;;

		getline(cin, input);
		ylen = input.length();
		for(int i = 0; i &lt; ylen; i++)
			Y[i] = input[ylen - i - 1] - &#39;0&#39;;

		int answer[510] = {0};
		for(int i = 0; i &lt; xlen; i++) {
			for(int j = 0; j &lt; ylen; j++) {
				answer[i + j] += X[i] * Y[j];
				answer[i + j + 1] += answer[i+j] / 10;
				answer[i + j] %= 10;
			}
		}
		anslen = xlen + ylen;
		while(anslen &gt; 1 &amp;&amp; !answer[anslen - 1])
			anslen--;

		for(int i = anslen-1; i &gt;= 0; i--)
			printf(&quot;%d&quot;, answer[i]);
		printf(&quot;\n&quot;);
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