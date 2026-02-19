<!DOCTYPE html>
<html>
<head>
<title>uva536</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva536</h1>
<pre class="prettyprint">
//uva536
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;

using namespace std;

char preord[30], inord[30];
int len;

void solve(int d, int k , int left, int right) {
	if (left &gt; right || right &lt; left || k &gt;= len) return;

	if (left == right)
		printf(&quot;%c&quot;, inord[left]);
	else {
		int i;
		for (i = left; i &lt; len; i++) {
			if (inord[i] == preord[k]) {
				solve(d + 1, k + 1, left, i - 1);
				solve(d + 1, k + (i - left) + 1, i + 1, right);
				printf(&quot;%c&quot;, inord[i]);
				break;
			}
		}
	}
}

int main() {
	while (scanf(&quot;%s %s&quot;, preord, inord) == 2) {
		len = strlen(preord);
		solve(0, 0, 0, len - 1);
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