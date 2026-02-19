<!DOCTYPE html>
<html>
<head>
<title>uva516</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva516</h1>
<pre class="prettyprint">
//uva516
#include &lt;iostream&gt;

using namespace std;

void factor(int n) {
	int p[32] = {}, e[32] = {}, cnt = 0;
	for(int i = 2; i * i &lt;= n; ++i) {
		if(!(n % i)) {
			p[cnt] = i;
			for(;!(n % i); n /= i)
				++e[cnt];
			++cnt;
		}
	}
	if(n != 1) {
		p[cnt] = n;
		e[cnt] = 1;
		++cnt;
	}

	cout &lt;&lt; p[cnt - 1] &lt;&lt; &quot; &quot; &lt;&lt; e[cnt - 1];
	for(int i = cnt - 2; i &gt;= 0; --i)
		cout &lt;&lt; &quot; &quot; &lt;&lt; p[i] &lt;&lt; &quot; &quot; &lt;&lt; e[i];
	cout &lt;&lt; endl;
}

int main()
{
	int p, e;
	while(cin &gt;&gt; p &amp;&amp; p) {
		char ch;
		cin.get(ch);
		cin &gt;&gt; e;

		int x;
		for(x = 1; e; --e)
			x *= p;

		while(cin.get(ch) &amp;&amp; ch != &#39;\n&#39;) {
			cin &gt;&gt; p &gt;&gt; e;
			for(; e; --e)
				x *= p;
		}
		factor(x - 1);
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