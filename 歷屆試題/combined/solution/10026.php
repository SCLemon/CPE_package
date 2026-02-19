<!DOCTYPE html>
<html>
<head>
<title>uva10026</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10026</h1>
<pre class="prettyprint">
//uva10026
#include&lt;cstdio&gt;
#include&lt;algorithm&gt;

using namespace std;

struct job{
	int num;
	double fine_per_day;
};

bool cmp(struct job a, struct job b) {
	if(a.fine_per_day != b.fine_per_day)
		return a.fine_per_day &gt; b.fine_per_day;
	else
		return a.num &lt; b.num;
}

int main(void) {
	int total, num_job, day, i, j;
	double fine;
	struct job work[1001];

	scanf(&quot;%d&quot;, &amp;total);
	for(j = 0; j &lt; total; j++) {
		if(j)
			printf(&quot;\n&quot;);
		scanf(&quot;%d&quot;, &amp;num_job);
		for(i = 0; i &lt; num_job; i++) {
			scanf(&quot;%d%lf&quot;, &amp;day, &amp;fine);
			work[i].num = i + 1;
			work[i].fine_per_day = (double)fine / day;
		}
		sort(work, work+num_job, cmp);
		printf(&quot;%d&quot;, work[0].num);
		for(i = 1; i &lt; num_job; i++) {
			printf(&quot; %d&quot;, work[i].num);
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