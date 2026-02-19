<!DOCTYPE html>
<html>
<head>
<title>uva11192</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11192</h1>
<pre class="prettyprint">
//uva11192
#include &lt;iostream&gt;
#include &lt;string&gt;
#include &lt;algorithm&gt;

using namespace std;

int main() {
	int group_count;
	string q;

	while (cin &gt;&gt; group_count &gt;&gt; q &amp;&amp; group_count &gt; 0) {
		int group_size = q.size() / group_count;

		for (int i = 0; i &lt; q.size(); i += group_size) {
			string segment = q.substr(i, group_size);
			cout &lt;&lt; string(segment.rbegin(), segment.rend());
		}
		cout &lt;&lt; endl;
	}
}
</pre>

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
