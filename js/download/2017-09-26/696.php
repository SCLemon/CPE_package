<!DOCTYPE html>
<html>
<head>
<title>uva696</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva696</h1>
<pre class="prettyprint">
//uva696
#include &lt;iostream&gt;

using namespace std;

int solve(int m, int n){

	if (m &gt; n)
	    swap(m, n);

	if (m == 1) //special case
		return n;
	else if (m == 2) //special case
	    return 4 * (n / 4) + ( (n % 4 &lt;= 2) ? 2 * (n % 4): 4);
	else  //normal case
	    return (m * n + 1) / 2;

}

int main(){

	int m, n;

	while (true){

		cin &gt;&gt; m &gt;&gt; n;
		if (m == 0 || n == 0)
		    break;
		int res = solve(m, n);
		cout &lt;&lt; res &lt;&lt; &quot; knights may be placed on a &quot; &lt;&lt; m &lt;&lt; &quot; row &quot;
		&lt;&lt; n &lt;&lt; &quot; column board.&quot; &lt;&lt; endl;
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