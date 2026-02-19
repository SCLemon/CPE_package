<!DOCTYPE html>
<html>
<head>
<title>uva10221</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10221</h1>
<pre class="prettyprint">
//uva10221
#include&lt;stdio.h&gt;
#include&lt;math.h&gt;

int main() {

	char s[10];
	double PI, x, y, i, j;
	PI = atan(1) * 4;
	while (scanf(&quot;%lf %lf %s&quot;,&amp;i, &amp;j, &amp;s) != EOF) {
		if (s[0] == &#39;m&#39;)
            j /= 60;
        j = fmod(j,360); // add this line
		if(j &gt; 180)
            j = 360 - j;

		x = 2 * PI * (i + 6440) * (j / 360);
		y = 2 * (i + 6440) * sin(j * PI / 360);
		printf(&quot;%.6lf %.6lf\n&quot;, x, y);

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