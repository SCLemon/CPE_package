<!DOCTYPE html>
<html>
<head>
<title>uva337</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva337</h1>
<pre class="prettyprint">
//uva337
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
#include &lt;iostream&gt;
using namespace std;

int main() {
	int n, cases = 0;
	while(scanf(&quot;%d&quot;, &amp;n) == 1 &amp;&amp; n) {
		char g[10][10];
		while(getchar() != &#39;\n&#39;);
		memset(g, &#39; &#39;, sizeof(g));
		int px = 0, py = 0;
		bool insertmode = false;
		string cmd, cmds = &quot;&quot;;
		while(n--) {
			getline(cin, cmd);
			cmds += cmd;
		}
		int i, j;
		for(i = 0; i &lt; cmds.length(); i++) {
			if(cmds[i] == &#39;^&#39;) {
				i++;
				if(cmds[i] == &#39;b&#39;) {
					py = 0;
				}
				else if(cmds[i] == &#39;c&#39;) {
					memset(g, &#39; &#39;, sizeof(g));
				}
				else if(cmds[i] == &#39;d&#39;) {
					px++;
					if(px &gt;= 10)
						px = 9;
				}
				else if(cmds[i] == &#39;e&#39;) {
					for(j = py; j &lt; 10; j++)
						g[px][j] = &#39; &#39;;
				}
				else if(cmds[i] == &#39;h&#39;) {
					px = 0, py = 0;
				}
				else if(cmds[i] == &#39;i&#39;) {
					insertmode = true;
				}
				else if(cmds[i] == &#39;l&#39;) {
					if(py &gt; 0)
						py--;
				}
				else if(cmds[i] == &#39;o&#39;) {
					insertmode = false;
				}
				else if(cmds[i] == &#39;r&#39;) {
					py++;
					if(py &gt;= 10)
						py = 9;
				}
				else if(cmds[i] == &#39;u&#39;) {
					if(px &gt; 0)
						px--;
				}
				else if(cmds[i] == &#39;^&#39;) {
					goto printss;
				}
				else {
					px = cmds[i] - &#39;0&#39;;
					i++;
					py = cmds[i] - &#39;0&#39;;
				}

			}
			else {
				printss:
				if(insertmode) {
					for(j = 8; j &gt;= py; j--)
						g[px][j + 1] = g[px][j];
					g[px][py] = cmds[i];
				}
				else
					g[px][py] = cmds[i];
				py++;
				if(py &gt;= 10)
					py = 9;
			}
		}
		
		printf(&quot;Case %d\n&quot;, ++cases);
		puts(&quot;+----------+&quot;);
		for(int i = 0; i &lt; 10; i++, puts(&quot;|&quot;)) {
			putchar(&#39;|&#39;);
			for(int j = 0; j &lt; 10; j++)
				putchar(g[i][j]);
		}
		puts(&quot;+----------+&quot;);

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