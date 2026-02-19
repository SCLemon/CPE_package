<!DOCTYPE html>
<html>
<head>
<title>uva10010</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10010</h1>
<pre class="prettyprint">
//uva10010
#include &lt;iostream&gt;
#include &lt;string&gt;
#include &lt;locale&gt;
using namespace std;

int main(){
	int d[8][2] = {{-1, -1}, {-1, 0}, {-1, 1}, {0, -1}, {0, 1}, {1, -1}, {1, 0}, {1, 1}};
	int n;
	cin &gt;&gt; n;
	cin.ignore();
	for(int i = 0;i &lt; n;i++){
		getchar();
		int a, b;
		cin &gt;&gt; a &gt;&gt; b;
		cin.ignore();
		char table[a][b];
		for(int j = 0;j &lt; a;j++){
			for(int k = 0;k &lt; b;k++)
				cin &gt;&gt; table[j][k];
			getchar();
		}
		int m;
		cin &gt;&gt; m;
		cin.ignore();
		string s[m];
		int ans[m][3] = {0};
		for(int j = 0;j &lt; m;j++)
			getline(cin, s[j]);
		for(int j = 0;j &lt; a;j++)
			for(int k = 0;k &lt; b;k++)
				for(int g = 0;g &lt; m;g++)
					if(ans[g][0] &lt; (int)s[g].length() &amp;&amp; tolower(s[g][0]) == tolower(table[j][k])){
						for(int h = 0;h &lt; 8;h++){
							int step = 0;
							while((j + d[h][0] * step) &gt;= 0 &amp;&amp; (k + d[h][1] * step) &gt;= 0 &amp;&amp;
									(j + d[h][0] * step) &lt;= a &amp;&amp; (k + d[h][1] * step) &lt;= b){
								if(tolower(s[g][step]) == tolower(table[j + d[h][0] * step][k + d[h][1] * step])){
									ans[g][0]++;
									step++;
								}
								else{
									ans[g][0] = 0;
									break;
								}
								if(ans[g][0] == (int)s[g].length()){
									ans[g][1] = j + 1;
									ans[g][2] = k + 1;
									break;
								}
							}
							if(ans[g][0] == (int)s[g].length())
								break;
							else
								ans[g][0] = 0;
						}
					}
		for(int j = 0;j &lt; m;j++)
			cout &lt;&lt; ans[j][1] &lt;&lt; &quot; &quot; &lt;&lt; ans[j][2] &lt;&lt; endl;
		if(i &lt; n - 1)
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