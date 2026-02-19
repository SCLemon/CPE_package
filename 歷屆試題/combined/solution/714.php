<!DOCTYPE html>
<html>
<head>
<title>uva714</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva714</h1>
<pre class="prettyprint">
//uva714
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
#include &lt;cstring&gt;

using namespace std;

int main(void) {
	int N, m, k, i, p[505], cnt, s[505];
	long long r, l, t, sum;

	scanf(&quot;%d&quot;, &amp;N);
	while(N--) {
		scanf(&quot;%d %d&quot;, &amp;m, &amp;k);

		r = l = 0;
		for(i = 0; i &lt; m; ++i) {
			scanf(&quot;%d&quot;, &amp;p[i]);
			if(l &lt; p[i]) l = p[i];
			r += p[i];
		}

		while(l &lt; r) {
			t = (r + l) / 2;
			cnt = sum = 0;
			for(i = 0; i &lt; m; ++i) {
				sum += p[i];
				if(sum &gt; t) {
					++cnt;
					sum = p[i];
				}
			}

			if(cnt &lt; k) r = t;
			else l = t + 1;
		}

		cnt = sum = 0;
		memset(s, 0, sizeof(s));
		for(i = m - 1; i &gt;= 0; --i) {
			sum += p[i];
			if(sum &gt; r || i &lt; k - cnt - 1) {
				s[i] = 1;
				++cnt;
				sum = p[i];
			}
		}
		
		for(i = 0; i &lt; m; ++i) {
			if(i) printf(&quot; &quot;);
			printf(&quot;%d&quot;, p[i]);
			if(s[i])
				printf(&quot; /&quot;);
		}
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