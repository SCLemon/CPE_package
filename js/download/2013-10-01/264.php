<!DOCTYPE html>
<html>
<head>
<title>uva264</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva264</h1>
<pre class="prettyprint">
//uva264
#include &lt;iostream&gt;

using namespace std;

int main() {
	long input_n;
	int numerator, denominator;

	while(cin &gt;&gt; input_n) {
		// 先推算出在哪一條副對角線上(diag_n)
		int n;
		int sum = 0;
		for(n = 1; sum &lt; input_n; n++)
			sum += n;
		
		// 找到對應的副對角線後，
		// 再以輸入數值扣除累計到前一條副對角線的分數個數的餘數
		// 去推算分子和分母即可
		numerator = input_n-(sum-(n-1));
		denominator = n-numerator;

		if(n%2 == 1)
			cout &lt;&lt; &quot;TERM &quot; &lt;&lt; input_n &lt;&lt; &quot; IS &quot; &lt;&lt; numerator &lt;&lt; &quot;/&quot; &lt;&lt; denominator &lt;&lt; endl;
		else
			cout &lt;&lt; &quot;TERM &quot; &lt;&lt; input_n &lt;&lt; &quot; IS &quot; &lt;&lt; denominator &lt;&lt; &quot;/&quot; &lt;&lt; numerator &lt;&lt; endl;
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