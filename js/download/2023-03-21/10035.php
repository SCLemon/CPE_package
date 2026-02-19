<!DOCTYPE html>
<html>
<head>
<title>uva10035</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10035</h1>
<pre class="prettyprint">
//uva10035
#include &lt;iostream&gt;
#include &lt;stack&gt;
using namespace std;

int main() {
	int n, m, a, b, carry, count;

	scanf(&quot;%d%d&quot;, &amp;n, &amp;m);
	while (n != 0 || m != 0) {
		carry = 0;
		count = 0;
		while (n &gt; 0 || m &gt; 0) {
			if (n % 10 + m % 10 + carry &gt;= 10) {
				++count;
				carry = 1;
			}
			else
				carry = 0;
			n /= 10;
			m /= 10;
		}

		if (count &lt;= 1)
			if (count == 0)
				cout &lt;&lt; &quot;No carry operation.\n&quot;;
			else
				cout &lt;&lt; &quot;1 carry operation.\n&quot;;
		else
			cout &lt;&lt; count &lt;&lt; &quot; carry operations.\n&quot;;

		scanf(&quot;%d%d&quot;, &amp;n, &amp;m);
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