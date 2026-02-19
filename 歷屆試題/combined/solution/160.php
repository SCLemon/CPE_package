<!DOCTYPE html>
<html>
<head>
<title>uva160</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva160</h1>
<pre class="prettyprint">
//uva160
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;unordered_map&gt;
using namespace std;

int main() {
	int n, num, idx, length;
	vector&lt;vector&lt;int&gt;&gt; a(101);
	vector&lt;int&gt; temp_vector;
	vector&lt;int&gt; prime = {2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 
							31, 37, 41, 43, 47, 53, 59, 61, 
							67, 71, 73, 79, 83, 89, 97};
	unordered_map&lt;int, int&gt; m;
	for (int i = 0; i &lt; 25; ++i)
		m[prime[i]] = i;

	vector&lt;bool&gt; is_prime = {0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 
								1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 
								0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 
								1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 
								1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 
								0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 
								1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 
								1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 
								0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 
								0, 0, 0, 0, 0, 0, 1, 0, 0, 0};

	a[2].push_back(1);
	for (int i = 3; i &lt;= 100; ++i) {
		temp_vector = a[i - 1];
		if (is_prime[i]) {
			temp_vector.push_back(1);
		}
		else {
			num = i;
			idx = 0;
			while (idx &lt; 4) {
				if (num % prime[idx] == 0) {
					num /= prime[idx];
					++temp_vector[idx];
				}
				else
					++idx;
			}

			if (num &gt; 1)
				++temp_vector[ m[num] ];
		}
		a[i] = temp_vector;
	}

	scanf(&quot;%d&quot;, &amp;n);
	while (n != 0) {
		printf(&quot;%3d! =&quot;, n);
		length = a[n].size();
		for (int i = 0; i &lt; length; ++i) {
			if ((i % 15 == 0) &amp;&amp; (i != 0))
				printf(&quot;\n      &quot;);
			printf(&quot;%3d&quot;, a[n][i]);
		}
		printf(&quot;\n&quot;);
		scanf(&quot;%d&quot;, &amp;n);
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