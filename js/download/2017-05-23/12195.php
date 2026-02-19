<!DOCTYPE html>
<html>
<head>
<title>uva12195</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12195</h1>
<pre class="prettyprint">
//uva12195
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

double symbol(char s);

int main(void) {
    int num = 0;
    double duration = 0, sum = 0;
    char c;
	
    while (1) {
	    c = getchar();
	    if (c == 0xA) {
		    printf(&quot;%d\n&quot;, num);
		    num = 0;
	    }
	    else if (c == 0x2A)
		    break;
	
	    duration = symbol(c);
	    if (duration == 0) {
		    if (sum == 1)
			    num++;
			
		    sum = 0;
	    }
	    else
		    sum = sum + duration;
	    }
	return 0;
}

double symbol(char s) {
    double duration;
    switch (s) {
	    case &#39;W&#39;:
		    duration = 1;
		    break;
	    case &#39;H&#39;:
		    duration = 0.5;
		    break;
	    case &#39;Q&#39;:
		    duration = 0.25;
		    break;
	    case &#39;E&#39;:
		    duration = 0.125;
		    break;
	    case &#39;S&#39;:
		    duration = 0.0625;
		    break;
	    case &#39;T&#39;:
		    duration = 0.03125;
		    break;
	    case &#39;X&#39;:
		    duration = 0.015625;
		    break;
	    case &#39;/&#39;:
		    duration = 0;
		    break;
    }
    return duration;
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