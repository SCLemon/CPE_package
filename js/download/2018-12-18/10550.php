<!DOCTYPE html>
<html>
<head>
<title>uva10550</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10550</h1>
<pre class="prettyprint">
//uva10550
#include &lt;stdio.h&gt;

using namespace std;

int main()
{
	int s,a,b,c,ans;
	while(scanf(&quot;%d %d %d %d&quot;,&amp;s,&amp;a,&amp;b,&amp;c))
	{
		if(s+a+b+c==0)
            break;

		ans=120+(40+s-a)%40+(40+b-a)%40+(40+b-c)%40;
		printf(&quot;%d\n&quot;,ans*9);
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