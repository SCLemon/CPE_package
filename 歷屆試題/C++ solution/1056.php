<!DOCTYPE html>
<html>
<head>
<title>uva1056</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1056</h1>
<pre class="prettyprint">
//uva1056
#include &lt;iostream&gt;
#include &lt;cstdlib&gt;
#include &lt;map&gt;
using namespace std;
#define MAX 999999

int main() {

	int m, n, t = 1;
	while ((cin &gt;&gt; m &gt;&gt; n)) {
		if(m ==0 || n == 0)
			break;
		map&lt;string, int&gt; people;
		int arr[m][m];
		for(int i = 0; i &lt; m; i++)
			for(int j= 0; j &lt; m; j++)
				arr[i][j] = MAX;
		int ct = 0;
		for (int i = 0; i &lt; n; i++){
			string s1, s2;
			cin &gt;&gt; s1 &gt;&gt; s2;
			if(people.find(s1) == people.end()) {
				people[s1] = ct;
				ct++;
			}
			if(people.find(s2) == people.end()) {
				people[s2] = ct;
				ct++;
			}
			arr[people.find(s1)-&gt;second][people.find(s2)-&gt;second] = arr[people.find(s2)-&gt;second][people.find(s1)-&gt;second] = 1;
		}
		int ans = 0;
		for (int k = 0; k &lt; m; k++)
			for (int i = 0; i &lt; m; i++)
				for (int j = 0; j &lt; m; j++)
					if (arr[i][j] &gt; arr[i][k] + arr[k][j])
						arr[i][j] = arr[i][k] + arr[k][j];
		for (int i = 0; i &lt; m; i++)
			for (int j = i + 1; j &lt; m; j++)
				if (ans &lt; arr[i][j])
					ans = arr[i][j];
		cout &lt;&lt; &quot;Network &quot; &lt;&lt; t++ &lt;&lt; &quot;: &quot; &lt;&lt; ((ans &lt; MAX)?to_string(ans):&quot;DISCONNECTED&quot;) &lt;&lt; endl &lt;&lt; endl;
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