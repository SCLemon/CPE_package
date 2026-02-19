<!DOCTYPE html>
<html>
<head>
<title>uva11005</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11005</h1>
<pre class="prettyprint">
//uva11005
#include &lt;iostream&gt;
#include &lt;cstring&gt;
#include &lt;cstdio&gt;

using namespace std;

int f(int a, int b, int arr[], int &amp;cnt) {
	int tmp[40] = {}, i;
	cnt = 0;
	while(a &gt;= b) {
		tmp[cnt++] = a % b;
		a /= b;
	}
	if(a)
		tmp[cnt++] = a;
	for(i = 0; i &lt; cnt; ++i)
		arr[cnt-i-1] = tmp[i];

	return 0;
}

int CalCost(int arr[], int cnt, int cost[]) {
	int sum = 0;
	for(int i = 0; i &lt; cnt; ++i) {
		sum += cost[arr[i]];
	}

	return sum;
}

int main()
{
	int a, b, n, num, Min;
	int cost[40];
	int t, ti = 0;
	cin &gt;&gt; t;
	while(ti++ &lt; t) {
		printf(&quot;Case %d:\n&quot;, ti);

		for(int i = 0; i &lt; 36; ++i)
			cin &gt;&gt; cost[i];
		cin &gt;&gt; n;
		while(n--) {
			int arr[40] = {}, cnt = 0;
			int price[40] = {};

			cin &gt;&gt; num;
			Min = 999999999;
			for(b = 2; b &lt;= 36; ++b) {
				f(num, b, arr, cnt);
				price[b] = CalCost(arr, cnt, cost);

				if(price[b] &lt; Min)
					Min = price[b];
			}

			printf(&quot;Cheapest base(s) for number %d:&quot;, num);
			for(b = 2; b &lt;= 36; ++b) {
				if(price[b] == Min)
					printf(&quot; %d&quot;, b);
			}
			printf(&quot;\n&quot;);
		}
		if(ti != t)
			printf(&quot;\n&quot;);
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