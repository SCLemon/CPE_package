<!DOCTYPE html>
<html>
<head>
<title>uva540</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva540</h1>
<pre class="prettyprint">
//uva540
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
#include &lt;deque&gt;
#include &lt;cstring&gt;

using namespace std;

int team[1000005];
deque&lt; deque&lt;int&gt; &gt; dq;
deque&lt; deque&lt;int&gt; &gt;::iterator it;

int main(void) {
	int t, n, element, x, i, cas = 1;
	char cmd[10];

	while(scanf(&quot;%d&quot;, &amp;t) &amp;&amp; t) {
		memset(team, 0, sizeof(team));
		dq.clear();

		for(i = 1; i &lt;= t; ++i) {
			scanf(&quot;%d&quot;, &amp;n);
			while(n--) {
				scanf(&quot;%d&quot;, &amp;element);
				team[element] = i;
			}
		}

		printf(&quot;Scenario #%d\n&quot;, cas++);
		while(scanf(&quot;%s&quot;, cmd) &amp;&amp; strcmp(cmd, &quot;STOP&quot;)!=0) {
			if(strcmp(cmd, &quot;ENQUEUE&quot;) == 0) {
				scanf(&quot;%d&quot;, &amp;x);

				for(it = dq.begin(); it != dq.end(); ++it) {
					if(team[it-&gt;front()] == team[x]) {
						it-&gt;push_back(x);
						break;
					}
				}
				if(it == dq.end()) {
					deque&lt;int&gt; tmp;
					tmp.push_back(x);
					dq.push_back(tmp);
				}
			}
			else if(strcmp(cmd, &quot;DEQUEUE&quot;) == 0) {
				x = dq.front().front();
				if(dq.front().size() == 1) dq.pop_front();
				else dq.front().pop_front();
				printf(&quot;%d\n&quot;, x);
			}
		}
		printf(&quot;\n&quot;);
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