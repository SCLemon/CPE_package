<!DOCTYPE html>
<html>
<head>
<title>uva10062</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10062</h1>
<pre class="prettyprint">
//uva10062
#include&lt;cstdio&gt;
#include&lt;cstring&gt;
#include&lt;algorithm&gt;

using namespace std;

struct word{
	int code, time;
};

bool cmp(struct word a, struct word b) {
	if(a.time != b.time)
		return a.time &lt; b.time;
	else
		return a.code &gt; b.code;
}

int main(void) {
	int i = 0, j, temp[130];
	char qu[1005];
	struct word ans[130];
	while(gets(qu) != NULL) {
		if(i)
			printf(&quot;\n&quot;);
		for(i = 0; i &lt; 130; i++)
			temp[i] = 0;
		for(i = 0; i &lt; strlen(qu); i++)
			temp[(int)qu[i]]++;
		
		for(i = 32, j = 0; i &lt; 128; i++) {
			if(temp[i]) {
				ans[j].code = i;
				ans[j].time = temp[i];
				j++;
			}
		}
		sort(ans, ans + j, cmp);
		for(i = 0; i &lt; j; i++)
			printf(&quot;%d %d\n&quot;, ans[i].code, ans[i].time);
		i = 1;
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