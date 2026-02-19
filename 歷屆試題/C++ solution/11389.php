<!DOCTYPE html>
<html>
<head>
<title>uva11389</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11389</h1>
<pre class="prettyprint">
//uva11389
#include &lt;iostream&gt;
#include &lt;algorithm&gt;

using namespace std;

int main()
{
	int n, d, r;
	int morning[105], night[105];
	while ((cin &gt;&gt; n &gt;&gt; d &gt;&gt; r) &amp;&amp; (n || d || r)) {
		for (int i = 0; i &lt; n; ++i)
			cin &gt;&gt; morning[i];
		for (int i = 0; i &lt; n; ++i)
			cin &gt;&gt;night[i];

		sort(morning, morning + n);
		sort(night, night + n);

		int fine = 0;
		for (int i = 0; i &lt; n; ++i)
			if (morning[i] + night[n - i - 1] &gt; d)
				fine += ((morning[i] + night[n - i - 1] - d) * r);
		cout &lt;&lt; fine &lt;&lt; endl;
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