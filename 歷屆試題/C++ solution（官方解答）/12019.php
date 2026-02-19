<!DOCTYPE html>
<html>
<head>
<title>uva12019</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12019</h1>
<pre class="prettyprint">
//uva12019
#include &lt;iostream&gt;
using namespace std;

int main()
{
	char week[10][10] = {&quot;Monday&quot;, &quot;Tuesday&quot;, &quot;Wednesday&quot;, &quot;Thursday&quot;, &quot;Friday&quot;, &quot;Saturday&quot;, &quot;Sunday&quot;};
	int month[] = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
	int n;

	cin &gt;&gt; n;
	while(n--)
	{
		int mm, dd;
		cin &gt;&gt; mm &gt;&gt; dd;

		int w = 4;
		for(int i = 1; i &lt; mm; i++)
			w += month[i-1];

		w = (w + dd) % 7;
		cout &lt;&lt; week[w] &lt;&lt; endl;
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