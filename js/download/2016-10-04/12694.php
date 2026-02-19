<!DOCTYPE html>
<html>
<head>
<title>uva12694</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12694</h1>
<pre class="prettyprint">
//uva12694
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;algorithm&gt;
#include &lt;vector&gt;

using namespace std;

bool cmp(pair&lt;int,int&gt; A, pair&lt;int,int&gt; B) {
	return (A.second == B.second) ? (A.first &lt; B.first) : (A.second &lt; B.second);
}

int main(void) {
	vector&lt;pair&lt;int,int&gt;&gt; meeting;
	int T, T_S, T_E, count, start;
	scanf(&quot;%d&quot;, &amp;T);
	
	for(int i = 0; i &lt; T; i++) {
		count = 0;
		start = 0;

		meeting.clear();

		while(scanf(&quot;%d %d&quot;, &amp;T_S, &amp;T_E) &amp;&amp; T_S + T_E) {
			meeting.push_back(make_pair(T_S, T_E));
		}
		sort(meeting.begin(), meeting.end(), cmp);

		for(int j = 0; j &lt; meeting.size(); j++)
		{
			if(start &lt;= meeting[j].first)
			{
				count++;
				start = meeting[j].second;
			}
		}
		printf(&quot;%d\n&quot;, count);
	}
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