<!DOCTYPE html>
<html>
<head>
<title>uva397</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva397</h1>
<pre class="prettyprint">
//uva397
#include &lt;cstdio&gt;
#include &lt;cstdlib&gt;
#include &lt;iostream&gt;
#include &lt;cstring&gt;
#include &lt;vector&gt;

using namespace std;

bool first(char c) {
	if (c == &#39;*&#39; || c == &#39;/&#39;) return true;
	return false;
}


int main() {
	char var[10], check;
	int opd[25];
	bool opflag[25], nxt = false;
	char opn[25];
	int opcnt, i, j, cnt;
	while (scanf(&quot;%d&quot;, &amp;opd[0]) != EOF) {
		if (nxt == true) printf(&quot;\n&quot;);
		cnt = opcnt = 0;
		memset(opflag, false, sizeof(opflag));
		while(1) {
			while (scanf(&quot;%c&quot;, &amp;check) &amp;&amp; check == &#39; &#39;);
			if (check == &#39;=&#39;) {
				scanf(&quot;%s&quot;,var);
				break;
			}
			else
				opn[opcnt] = check;
			
			scanf(&quot;%d&quot;, &amp;opd[++opcnt]);
		}

		while (cnt != opcnt) {
			for (i = 0; i &lt;= opcnt; i++) {
				if (opflag[i] == false) {
					printf(&quot;%d &quot;, opd[i]);
					if (i != opcnt) printf(&quot;%c &quot;, opn[i]);
				}
			}
			printf(&quot;= %s\n&quot;, var);
			
			for (i = 0; i &lt; opcnt; i++) 
				if (opflag[i] == false &amp;&amp; first(opn[i]) == true)
					break;

			if (i == opcnt)
				for (i = 0; i &lt; opcnt; i++)
					if (opflag[i] == false)
						break;

			for (j = i + 1; ; j++)
				if (opflag[j] == false)
					break;

			opflag[i] = true;

			if (opn[i] == &#39;*&#39;)
				opd[j] = opd[i] * opd[j];
			else if (opn[i] == &#39;/&#39;)
				opd[j] = opd[i] / opd[j];
			else if (opn[i] == &#39;+&#39;)
				opd[j] = opd[i] + opd[j];
			else if (opn[i] == &#39;-&#39;)
				opd[j] = opd[i] - opd[j];
			cnt++;
		}

		printf(&quot;%d = %s\n&quot;, opd[j], var);
		nxt = true;
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