<!DOCTYPE html>
<html>
<head>
<title>uva11364</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11364</h1>
<pre class="prettyprint">
//uva11364
#include &lt;iostream&gt;

using namespace std;

int main()
{
	int numCases;
	cin &gt;&gt; numCases;

	for (int i = 0; i &lt; numCases; i++) {
		int numStores, minPosition = 100, maxPosition = -1;
		cin &gt;&gt; numStores;

		for (int j = 0; j &lt; numStores; j++) {
			int position;
			cin &gt;&gt; position;

			if (position &gt; maxPosition) {
				maxPosition = position;
			}

			if (position &lt; minPosition) {
				minPosition = position;
			}
		}

		cout &lt;&lt; (maxPosition - minPosition) * 2 &lt;&lt; endl;
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