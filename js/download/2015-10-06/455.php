<!DOCTYPE html>
<html>
<head>
<title>uva455</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva455</h1>
<pre class="prettyprint">
//uva455
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;

using namespace std;

char str[85];

int solve() {
	int i, j, len = strlen(str);
	for(i = 1; i &lt;= len; i++) { // length
		if(len % i != 0) continue;
		for(j = 0; j &lt; len; j++)
			if(str[j] != str[j % i])
				break;
		if(j == len)
			return i;
	}
	return -1;
}

int main() {
	int t;
	scanf(&quot;%d&quot;,&amp;t);
	while(t--) {
		scanf(&quot;%s&quot;, str);
		printf(&quot;%d\n&quot;, solve());
		if(t != 0)
			putchar(&#39;\n&#39;);
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