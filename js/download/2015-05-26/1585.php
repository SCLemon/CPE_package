<!DOCTYPE html>
<html>
<head>
<title>uva1585</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1585</h1>
<pre class="prettyprint">
//uva1585
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
#include &lt;cstring&gt;

using namespace std;

int main(void) {
	int T, score, cnt, i;
	char str[100];

	scanf(&quot;%d&quot;, &amp;T);
	while(T--) {
		scanf(&quot;%s&quot;, str);
		score = cnt = 0;
		for(i = 0; i &lt; strlen(str); ++i) {
			if(str[i] == &#39;O&#39;)
				++cnt;
			else
				cnt = 0;

			score += cnt;
		}
		printf(&quot;%d\n&quot;, score);
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