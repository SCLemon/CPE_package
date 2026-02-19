<!DOCTYPE html>
<html>
<head>
<title>uva10922</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10922</h1>
<pre class="prettyprint">
//uva10922
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;

using namespace std;

int main() {
	char str[1005];
	int i, sum, deg;
	while (gets(str) &amp;&amp; strcmp(str,&quot;0&quot;)) {
		printf(&quot;%s&quot;,str);
		for (sum = i = 0; str[i]; i++)
			sum += str[i]-&#39;0&#39;;
		
		if (sum % 9 != 0)
			printf(&quot; is not a multiple of 9.\n&quot;);
		else {
			deg = 1;
			while (sum &gt;= 10) {
				sprintf(str, &quot;%d&quot;, sum);
				sum = 0;
				for (i = 0; i &lt; str[i]; i++)
					sum += str[i]-&#39;0&#39;;
				deg++;
			}
			printf(&quot; is a multiple of 9 and has 9-degree %d.\n&quot;, deg);
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