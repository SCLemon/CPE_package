<!DOCTYPE html>
<html>
<head>
<title>uva10309</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10309</h1>
<pre class="prettyprint">
//uva10309
#include &quot;cstdio&quot;
#include &quot;cstdlib&quot;
#include &quot;cstring&quot;

char grid[12][12];
char light[12][12];

void invert(int r, int c) {
	if(light[r][c] != &#39;#&#39;)
		light[r][c] = &#39;#&#39;;
	else
		light[r][c] = &#39;O&#39;;
}

void press_light(int r, int c) {
	invert(r-1, c);
	invert(r, c-1);
	invert(r, c);
	invert(r, c+1);
	invert(r+1, c);
}

int test(int pattern) {
	int presses = 0;

	memcpy(light, grid, sizeof(grid));	
	for(int c = 1; c &lt;= 10; c++) {
		if(pattern &amp; 1) {
			press_light(1, c);
			presses++;
		}
		pattern &gt;&gt;= 1;
	}

	for(int r = 2; r &lt;= 10; r++) {
		for(int c = 1; c &lt;= 10; c++) {
			if(light[r - 1][c] == &#39;O&#39;) {
				press_light(r, c);
				presses++;
			}
		}
	}

	for(int c = 1; c &lt;= 10; c++)
		if(light[10][c] == &#39;O&#39;)
			return -1;

	return presses;
}

int main(void) {
	char name[1024];
	while(fgets(name, sizeof(name), stdin) &amp;&amp; strcmp(name, &quot;end\n&quot;)) {
		for(int r = 1; r &lt;= 10; r++)
			fgets(&amp;grid[r][1], 13, stdin);

		int answer = 0x7FFFFFFF;
		for(int p = 0; p &lt; 1024; p++) {
			int result = test(p);
			if(result &gt;= 0 &amp;&amp; answer &gt; result)
				answer = result;
		}			
		if(answer == 0x7FFFFFFF)
			answer = -1;

		for(int i = 0; name[i]; i++) {
			if(name[i] == &#39;\n&#39;) {
				name[i] = 0;
				break;
			}
		}
		printf(&quot;%s %d\n&quot;, name, answer);
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