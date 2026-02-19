<!DOCTYPE html>
<html>
<head>
<title>uva828</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva828</h1>
<pre class="prettyprint">
//uva828
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
char L[128];
char string[1024];
int N, n;
char ans[128];
int is_ans;

void sol (int index, int m, int ansLen) {
	int len = strlen(L);
	if (string[index] == &#39;\0&#39;) {
		ans[ansLen] == &#39;\r&#39;;
		return; 
	} 
	else if (string[index] == &#39; &#39;) {
		ans[ansLen] = &#39; &#39;;
		ansLen++;
		index++;
	}
	if (string[index] == L[m % len] &amp;&amp; string[index + 2] == L[(m + 1) % len]) {
		int i;
		int flag = 1;
		for (i = 0; i &lt; len; i++) {
			if (string[index + 1] == (L[i] - &#39;A&#39; + N) % 26 + &#39;A&#39;)
				flag = 0;
		}
		
		if (!flag) {
			ans[ansLen] = (string[index + 1] - N) &lt; &#39;A&#39; ? (string[index + 1] - N) + 26 : (string[index + 1] - N);
			ansLen++;
			m++;
			index += 3;
			sol(index, m, ansLen);
		}
		else
			is_ans = 0;	
	}
	else {
		int i;
		int flag = 1;
		for (i = 0; i &lt; len; i++) {
			if (string[index] == (L[i] - &#39;A&#39; + N) % 26 + &#39;A&#39;) {
				flag = 0;
				is_ans = 0;
				break;
			}
		}
		
		if (flag) {
			ans[ansLen] = (string[index] - N) &lt; &#39;A&#39; ? (string[index] - N) + 26 : (string[index] - N);
			ansLen++;
			index++;
			sol(index, m, ansLen);
		}
		
	} 
}

int main(){
	int count;
	scanf(&quot;%d&quot;, &amp;count);
	while (count--) {
		scanf(&quot;\n%[^\n]&quot;, &amp;L);
		scanf(&quot;%d %d&quot;, &amp;N, &amp;n);
		int i;
		for (i = 0; i &lt; n; i++) {
			memset(string, &#39;\0&#39;, 1024);
			memset(ans, &#39;\0&#39;, 128);
			getchar();
			scanf(&quot;%[^\n]&quot;, string);
			is_ans = 1;
			sol(0, 0, 0);
			if (is_ans == 0)
                printf(&quot;error in encryption\n&quot;);
            else
            	printf(&quot;%s\n&quot;, ans);
		}
		if (count)
			printf(&quot;\n&quot;);
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