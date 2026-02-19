<!DOCTYPE html>
<html>
<head>
<title>uva145</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva145</h1>
<pre class="prettyprint">
//uva145
#include&lt;iostream&gt;
#include&lt;cstdio&gt;
#include&lt;iomanip&gt;

using namespace std;

double cost[5][3] = {
	{0.10, 0.06, 0.02},
	{0.25, 0.15, 0.05},
	{0.53, 0.33, 0.13},
	{0.87, 0.47, 0.17},
	{1.44, 0.80, 0.30}
};

main(){
	int a, b, c, d, x, y;
	int i, j;
	double sum;
	char str[10], ch;
	
	while (scanf(&quot;%c&quot;,&amp;ch) &amp;&amp; ch != &#39;#&#39;){
		cin &gt;&gt; str &gt;&gt; a &gt;&gt; b &gt;&gt; c &gt;&gt; d; 
		getchar();
		sum = 0;
		int minu[1440] = {0}, time[3] = {0};
		x = a * 60 + b;
		y = c * 60 + d;
		if (y &lt;= x){
			for (i = 0; i &lt; y; i++)
				minu[i] = 1;
			for (i = x; i &lt; 1440; i++)
				minu[i] = 1;
		}
		else{
			for (i = x; i &lt; y; i++)
				minu[i] = 1;
		}
		for (i = 0; i &lt; 480; i++){
			if (minu[i] == 1)
				time[2]++;
		}
		for (i = 480; i &lt; 1080; i++){
			if (minu[i] == 1)
				time[0]++;
		}
		for (i = 1080; i &lt; 1320; i++){
			if (minu[i] == 1)
				time[1]++;
		}
		for (i = 1320; i &lt; 1440; i++){
			if (minu[i] == 1)
				time[2]++;
		}
		sum = time[0] * cost[ch - &#39;A&#39;][0] + time[1] * cost[ch - &#39;A&#39;][1] + time[2] * cost[ch - &#39;A&#39;][2];
		cout &lt;&lt; setw(10) &lt;&lt; str &lt;&lt; setw(6) &lt;&lt; time[0] &lt;&lt; setw(6) &lt;&lt; time[1] &lt;&lt; setw(6) &lt;&lt; time[2] &lt;&lt; setw(3) &lt;&lt; ch &lt;&lt; setw(8) &lt;&lt; fixed &lt;&lt; setprecision(2) &lt;&lt; sum &lt;&lt; endl;
	}
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