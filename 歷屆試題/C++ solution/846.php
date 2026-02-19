<!DOCTYPE html>
<html>
<head>
<title>uva846</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva846</h1>
<pre class="prettyprint">
//uva846
#include &lt;iostream&gt;
#include &lt;cstdlib&gt;
using namespace std;

int main() {

	int m;
	cin &gt;&gt; m;
	for (int i = 0; i &lt; m; i++) {
		long long a, b;
		cin &gt;&gt; a &gt;&gt; b;
		long long diff = b - a, j;
		if(diff &gt;= 0 &amp;&amp; diff &lt;= 3)
			cout &lt;&lt; diff &lt;&lt; endl;
		else {
			for(j = 2; diff &gt; 0; j += 2){
				if ((diff - j) &lt; 0)
					break;
				else
					diff -= j;
			}
			if (diff == 0)
				cout &lt;&lt; j - 2 &lt;&lt; endl;
			else if (diff &lt;= j / 2)
				cout &lt;&lt; j - 1 &lt;&lt; endl;
			else
				cout &lt;&lt; j &lt;&lt; endl;
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