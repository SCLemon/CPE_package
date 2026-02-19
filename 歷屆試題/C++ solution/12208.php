<!DOCTYPE html>
<html>
<head>
<title>uva12208</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12208</h1>
<pre class="prettyprint">
//uva12208
#include &lt;iostream&gt;
#include &lt;cmath&gt;
using namespace std;

long long int digit[32] = {1};
long long int count1(long long int n);

int main() {
	long long int a,b;
	int j=0;
	for (int i = 1; i &lt; 32; i++) //建表，digit[i]表示1~i的二進制1的個數總數
		digit[i] = (digit[i-1] * 2) + pow(2, i); //digit[i]=digit[i-1]*2+2^(i-1)
	while (cin &gt;&gt; a &gt;&gt; b){
		if (a &lt;= 0 &amp;&amp; b &lt;= 0)
			break;
		cout &lt;&lt; &quot;Case &quot; &lt;&lt; ++j &lt;&lt; &quot;: &quot; &lt;&lt; (count1(b)-count1(a-1)) &lt;&lt; endl; //(1~b的總數)-(1~a-1的總數)=[a,b]的總數
	}
	return 0;
}

long long int count1(long long int n) {
    if (n &lt; 1)
    	return 0;
    if (n == 1)
    	return 1;
    int firstbit;
    for (int i = 0; i &lt; 32; i++)
        if ((n &gt;&gt; i) &amp; 1) //尋找最高位元的1所在位置 (即二進制100..0，n為同長度的二進制數字)
        	firstbit = i; 
    if(firstbit) //100..0之前的結果查表(1~100..0的1總數)
    	return digit[firstbit - 1] + (n - pow(2, firstbit) + 1) + count1(n - pow(2, firstbit));
    return (n - pow(2, firstbit) + 1) + count1(n - pow(2, firstbit));
		//n與100..0的之間最高位元1的個數+其餘位元遞迴(其餘位元恰與1~(n-100..0)的1的個數相同)
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