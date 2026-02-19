<!DOCTYPE html>
<html>
<head>
<title>uva10008</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10008</h1>
<pre class="prettyprint">
//uva10008
#include &lt;iostream&gt;
#include &lt;cctype&gt;
#include &lt;algorithm&gt;
#include &lt;cstring&gt;
#include &lt;cstdio&gt;

#define len 5000

using namespace std;

int main() {
	int n, length, i, j, t;
	char msg[len];

	char alp[28]=&quot;ABCDEFGHIJKLMNOPQRSTUVWXYZ&quot;;
	int num[28] = {};

	cin &gt;&gt; n;
	cin.ignore();

	for(i = 0; i &lt; n ; i++) {
		cin.getline(msg, len);
		length = strlen(msg);

		for(j = 0; j &lt; length; j++)
			if(isalpha(msg[j]))
				num[toupper(msg[j])-&#39;A&#39;]++;
	}

	for(i = 0; i &lt; 26; i++) {
		for(j = 0; j &lt; 26; j++) {
			if(num[j] &lt; num[j+1]) {
				t = num[j];
				num[j] = num[j+1];
				num[j+1] = t;

				t = alp[j];
				alp[j] = alp[j+1];
				alp[j+1] = t;
			}
		}
	}
	for(j = 0; j &lt; 26; j++)
		if(num[j])
			printf(&quot;%c %d\n&quot;, alp[j], num[j]);

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