<!DOCTYPE html>
<html>
<head>
<title>uva11908</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11908</h1>
<pre class="prettyprint">
//uva11908
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;

#define MAX(x, y) (x &gt; y ? x : y)
#define MIN(x, y) (x &lt; y ? x : y)

struct order {
	int A;	// lowest floor
	int B;	// highest floor
	int C;	// profit
};

int fcmp(const void * a, const void * b) {
	return ((struct order*)a)-&gt;B - ((struct order*)b)-&gt;B;
}


int main() {
	int T;

	scanf(&quot;%d&quot;, &amp;T);
	for (int num_case = 1; num_case &lt;= T; num_case++) {
		int n;
		int min_floor = 200001;
		int profit[200001] = {};
		struct order orders[30000] = {};

		scanf(&quot;%d&quot;, &amp;n);
		for (int i = 0;i &lt; n;i++) {
			scanf(&quot;%d %d %d&quot;, &amp;orders[i].A, &amp;orders[i].B, &amp;orders[i].C);

			orders[i].B = orders[i].A + orders[i].B - 1;
			min_floor = MIN(min_floor, orders[i].A);
		}

		// sort by highest floor
		qsort(orders, n, sizeof (struct order), fcmp);

		int i = 0;						// index for orders
		int floor = min_floor;			// start from most lowest floor
		while (i &lt; n)
			if (orders[i].B == floor) {
				// profit = MAX(not accept, accept i-th order)
				if(orders[i].A == 0)	// start from ground
					profit[floor] = MAX(profit[floor], orders[i].C);
				else					// start from orders[i].A floor
					profit[floor] = MAX(profit[floor], profit[orders[i].A - 1] + orders[i].C);
				i += 1;
			}
			else {
				// pass max profit forward to next floor
				profit[floor + 1] = profit[floor];
				floor += 1;
			}

		printf(&quot;Case %d: %d\n&quot;, num_case, profit[floor]);
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