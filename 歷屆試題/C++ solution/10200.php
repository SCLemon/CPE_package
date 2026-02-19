<!DOCTYPE html>
<html>
<head>
<title>uva10200</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10200</h1>
<pre class="prettyprint">
//uva10200
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
#define SIZE 10001
#define PRIMECNT 1229

int isPrime[SIZE], prime[PRIMECNT], primeCnt[SIZE];

void init();
int f(int);

int main() {
	init();
	int a, b;

	while (scanf(&quot;%d %d&quot;, &amp;a, &amp;b) != EOF)
		printf(&quot;%.2f\n&quot;, ((f(b) - f(a - 1)) * 100.00 / (b - (a - 1))) + 1e-9);

	return 0;
}

void init() {
	int i, j, index = 0;

	memset(isPrime, 0, sizeof(isPrime));

	for (i = 2; i &lt; SIZE; i++) {
		if (isPrime[i] == 0) {
			prime[index++] = i;
			for (j = 2; i * j &lt; SIZE; j++) {
				isPrime[i * j] = 1;
			}
		}
	}

    int num;
    primeCnt[0] = 1 - isPrime[41];
	for (i = 1; i &lt; SIZE; i++) {
        num = i * i + i + 41;

        if (num &lt; SIZE)
            primeCnt[i] =  primeCnt[i - 1] + (1 - isPrime[num]);
        else {
            for (j = PRIMECNT - 1; j &gt;= 0 &amp;&amp; num % prime[j]; j--) ;
            if (j &lt; 0)
                primeCnt[i] =  primeCnt[i - 1] + 1;
            else
                primeCnt[i] =  primeCnt[i - 1];
        }
	}
}

int f(int n) {
    return primeCnt[n];
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