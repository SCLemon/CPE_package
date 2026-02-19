<!DOCTYPE html>
<html>
<head>
<title>uva406</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva406</h1>
<pre class="prettyprint">
//uva406
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#define MAX(a, b) (((a) &gt; (b) ? (a) : (b)))
#define MIN(a, b) (((a) &lt; (b) ? (a) : (b)))

int main(int argc, const char **argv) {
	bool is_not_prime[1001] = {false};
	int primes[1001] = {0}; // this will store 2, 3, 5, 7, 11, ..., in that order
	int pi[1001] = {0}; // pi[i] is the number of primes that are &lt;= i
	int N, C;
	pi[1] = 1;

	// determine which numbers are primes
	for (int i = 2; i &lt;= 1000; ++i) {
		if (!is_not_prime[i]) // i is a prime
			// remove all multiples of i from the list of possible primes
			for (int j = 2; i * j &lt;= 1000; ++j) {
				is_not_prime[i * j] = true;
			}
	}

	// compute the pi function
	for (int i = 2; i &lt;= 1000; ++i)
		pi[i] = pi[i - 1] + (is_not_prime[i] ? 0 : 1);

	// store the primes in primes[]
	int k = 0;
	for (int i = 1; i &lt;= 1000; ++i)
		if (!is_not_prime[i])
			primes[k++] = i;

	while (scanf(&quot;%d&quot;, &amp;N) &gt; 0 &amp;&amp; scanf(&quot;%d&quot;, &amp;C) &gt; 0) {
		printf(&quot;%d %d:&quot;, N, C);

		for (int i = MAX((pi[N] + 1)/ 2 - C, 0); i &lt; MIN(pi[N] / 2 + C, pi[N]); ++i)
			printf(&quot; %d&quot;, primes[i]);

		printf(&quot;\n\n&quot;);
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