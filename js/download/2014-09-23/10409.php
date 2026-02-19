<!DOCTYPE html>
<html>
<head>
<title>uva10409</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10409</h1>
<pre class="prettyprint">
//uva10409
#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main() {
	int m;
	while (cin &gt;&gt; m){
		if (m &lt;= 0)
			break;
		int u = 1, n = 2, w = 3, e = 4, s = 5, o = 6;
		for (int i = 0; i &lt; m; i++){
			string stg;

			int t;
			cin &gt;&gt; stg;
			switch (stg[0]){
				case &#39;n&#39;:
					t = u;
					u = s;
					s = o;
					o = n;
					n = t;
					break;
				case &#39;s&#39;:
					t = u;
					u = n;
					n = o;
					o = s;
					s = t;
					break;
				case &#39;e&#39;:
					t = u;
					u = w;
					w = o;
					o = e;
					e = t;
					break;
				case &#39;w&#39;:
					t = u;
					u = e;
					e = o;
					o = w;
					w = t;
					break;
			}
		}
		cout &lt;&lt; u &lt;&lt; endl;
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