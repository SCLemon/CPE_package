<!DOCTYPE html>
<html>
<head>
<title>uva11220</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11220</h1>
<pre class="prettyprint">
//uva11220
#include&lt;iostream&gt;
#include&lt;cstdio&gt;
#include&lt;cstring&gt;

using namespace std;

main(){
	int t, ca;
	int i, j, site, k;
	char word[1200];

	cin &gt;&gt; t;
	getchar();
	getchar();
	ca = 0;
	while(t--){
		cout &lt;&lt; &quot;Case #&quot; &lt;&lt; ++ca &lt;&lt; &quot;:&quot; &lt;&lt; endl;
		while (gets(word)){
			if (word[0] == &#39;\0&#39;)
                break;
			for (i = 0, site = 1, k = 1; word[i] != &#39;\0&#39;; i++, k++){
				if (word[i] ==&#39; &#39;)
                    k = 0;
				if (k == site) {
					cout &lt;&lt; word[i];
					k++;
					site++;
				}
			}
			cout &lt;&lt; endl;
		}
		if (t)
            cout &lt;&lt; endl;
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