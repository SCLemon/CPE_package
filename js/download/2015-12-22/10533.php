<!DOCTYPE html>
<html>
<head>
<title>uva10533</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10533</h1>
<pre class="prettyprint">
//uva10533
#include &lt;stdio.h&gt;
#define MAX 1000000

bool sieve[MAX];
int dp_acc[MAX] = {0};

int digit_sum(int n) {
	int sum = 0;
	for(; n &gt; 0; n /= 10)
		sum += n % 10;
	return sum;
}

void init() {
	sieve[0] = sieve[1] = false;
	for(int i = 2; i &lt; MAX; ++i)
		sieve[i] = true;
	for(int i = 2; i &lt; MAX; i++)
		if(sieve[i])
			for(int j = i+i; j &lt; MAX; j += i)
				sieve[j] = false;

	dp_acc[0] = dp_acc[1] = 0;
	for(int i = 2; i &lt; MAX; ++i)
		dp_acc[i] = dp_acc[i - 1] + (sieve[i] &amp;&amp; sieve[digit_sum(i)]);
}

int main() {
	int n, m1, m2;
	init();
	scanf(&quot;%d&quot;, &amp;n);
	for(int loop = 0; loop &lt; n; ++loop) {
		scanf(&quot;%d %d&quot;, &amp;m1, &amp;m2);
		printf(&quot;%d\n&quot;, dp_acc[m2] - dp_acc[m1 - 1]);
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