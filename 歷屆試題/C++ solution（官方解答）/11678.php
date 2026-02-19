<!DOCTYPE html>
<html>
<head>
<title>uva11678</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11678</h1>
<pre class="prettyprint">
//uva11678
#include &lt;iostream&gt;
using namespace std;

int main() {
	int m, n;
	while ((cin &gt;&gt; m &gt;&gt; n)){
		if (m == 0 &amp;&amp; n == 0)
			break;
		int a[m], b[n], an = 0, bn = 0;
		for (int i = 0;i &lt; m; i++){
			cin &gt;&gt; a[i];
			if (i &gt; 0 &amp;&amp; a[i] == a[i - 1])
				a[i - 1] = 0;
		}
		for (int i = 0;i &lt; n; i++){
			cin &gt;&gt; b[i];
			if (i &gt; 0 &amp;&amp; b[i] == b[i - 1])
				b[i - 1] = 0;
		}

		for (int i = 0, j = 0;i &lt; m &amp;&amp; j &lt; n;){
			if (a[i] == b[j]){
				a[i] = 0;
				b[j] = 0;
				i++;
				j++;
			}
			else{
				if(a[i] &lt; b[j])
					i++;
				else
					j++;
			}
		}
		for (int i = 0;i &lt; m; i++)
			if (a[i] &gt; 0)
				an++;
		for (int i = 0;i &lt; n; i++)
			if (b[i] &gt; 0)
				bn++;
		cout &lt;&lt; ((an &gt; bn)?bn : an) &lt;&lt; endl;
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