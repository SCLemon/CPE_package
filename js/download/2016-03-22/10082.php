<!DOCTYPE html>
<html>
<head>
<title>uva10082</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10082</h1>
<pre class="prettyprint">
//uva10082
#include &lt;cstdio&gt;

int main() {
	const char str[]={&quot;`1234567890-=QWERTYUIOP[]\\ASDFGHJKL;&#39;ZXCVBNM,./&quot;};
	char c;
	int i;
	while (( c = getchar()) != EOF) {
		if (c == &#39; &#39; || c == &#39;\n&#39;)
			putchar(c);
		else {
			for (i = 0; str[i] != c; i++);
			putchar(str[i - 1]);
		}
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