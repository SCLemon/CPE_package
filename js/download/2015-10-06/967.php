<!DOCTYPE html>
<html>
<head>
<title>uva967</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva967</h1>
<pre class="prettyprint">
//uva967
#include &lt;cstdio&gt;
#include &lt;cmath&gt;

const int n_max = 1000000;
bool not_primes[n_max + 1]; // not_primes[i] is true if i is not a prime
int nr_circular_primes[n_max + 1];
	// nr_circular_primes[i] is the number of circular primes up to i

void sieve_of_eratosthenes() {
	for(int i = 2, e = static_cast&lt;int&gt;(sqrt(static_cast&lt;double&gt;(n_max))); i &lt;= e; i++)
		if(!not_primes[i])
			for(int j = i * i; j &lt;= n_max; j += i)
				not_primes[j] = true;
}

int get_number(int length, int* digits) {
	int n = 0;
	for(int i = 0; i &lt; length; i++, digits++) {
		if(i)
			n *= 10;
		n += *digits;
	}
	return n;
}

bool is_circular_prime(int n) {
	if(not_primes[n])
		return false;
	const int nr_digits_max = 8;
	int digits[nr_digits_max * 2];
	int length;
	for(length = 1; ; length++) {
		digits[nr_digits_max - length] = n % 10;
		n /= 10;
		if(!n)
			break;
	}
	for(int i = nr_digits_max - length, j = nr_digits_max, k = length - 1; k; k--) {
		digits[j++] = digits[i++];
		if(not_primes[get_number(length, &amp;digits[i])])
			return false;
	}
	return true;
}

int main() {
	sieve_of_eratosthenes();
	int nr = 0;
	for(int n = 100; n &lt;= n_max; n++) {
		if(is_circular_prime(n))
			nr++;
		nr_circular_primes[n] = nr;
	}
	while(true) {
		int i, j;
		scanf(&quot;%d&quot;, &amp;i);
		if(i == -1)
			break;
		scanf(&quot;%d&quot;, &amp;j);
		nr = nr_circular_primes[j] - nr_circular_primes[i - 1];
		if(!nr)
			puts(&quot;No Circular Primes.&quot;);
		else if(nr == 1)
			puts(&quot;1 Circular Prime.&quot;);
		else
			printf(&quot;%d Circular Primes.\n&quot;, nr);
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