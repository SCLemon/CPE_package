<!DOCTYPE html>
<html>
<head>
<title>uva686</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva686</h1>
<pre class="prettyprint">
//uva686
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

int main()
{
	int prime[32769] = {0}; // 2^15 + 1
	int input, ans_count;

	for (int i = 2; i &lt;= 32768; ++i) {
		if (prime[i] == 0) {
			for (int j = i; i * j &lt;= 32768; ++j) {
				prime[i * j] = 1;	// 1 represents the index is not a prime number
			}
		}
	}

	while (scanf(&quot;%d&quot;, &amp;input) != EOF &amp;&amp; input != 0) {
		ans_count = 0;
		for (int i = 2; i &lt;= input / 2; ++i) {
			if (prime[i] == 0 &amp;&amp; prime[input - i] == 0) {
				++ans_count;
			}
		}
		printf(&quot;%d\n&quot;, ans_count);
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