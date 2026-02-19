<!DOCTYPE html>
<html>
<head>
<title>uva10056</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10056</h1>
<pre class="prettyprint">
//uva10056
#include &lt;iostream&gt;
#include &lt;math.h&gt;
#include &lt;iomanip&gt;
using namespace std;

int main() {
	int num;
	cin &gt;&gt; num;
	for (int i = 0; i &lt; num; i++) {
		int player_num, player_n;
		double prob;
		cin &gt;&gt; player_num &gt;&gt; prob &gt;&gt; player_n;
		double q = 1 - prob;
		double second = pow(q, player_num);
		if (second == 1) {
			cout &lt;&lt; &quot;0.0000&quot; &lt;&lt; endl;
			continue;
		}
		double ans = prob * pow(q, player_n - 1) / (1.0 - pow(q, player_num));
		cout &lt;&lt; fixed &lt;&lt; setprecision(4) &lt;&lt; ans &lt;&lt; endl;
	}

	//system(&quot;PAUSE&quot;);
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