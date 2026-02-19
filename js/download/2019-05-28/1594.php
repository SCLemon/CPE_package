<!DOCTYPE html>
<html>
<head>
<title>uva1594</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1594</h1>
<pre class="prettyprint">
//uva1594
#include&lt;iostream&gt;
#include&lt;cstdio&gt;
#include&lt;cmath&gt;

using namespace std;

int main() {
	int n, s[20], t;
	int i, j, temp, k;

	cin &gt;&gt; n;
	while(n--) {
		 cin &gt;&gt; t;
		 for (i = 0; i &lt; t; i++)
            cin &gt;&gt; s[i];
		 for (i = 0; i &lt; 1000; i++) {
		 	for (j = 0, temp = s[0]; j &lt; t-1 ; j++)
		 		s[j] = abs(s[j] - s[j+1]);

            s[j] = abs(s[j] - temp);
		 }
		 for (i = 0, k = 0; i &lt; t; i++){
		 	if (s[i] != 0){
		 		k = 1;
		 		break;
			 }
		 }
		 if (k == 0) cout &lt;&lt; &quot;ZERO&quot; &lt;&lt; endl;
		 else cout &lt;&lt; &quot;LOOP&quot; &lt;&lt; endl;
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