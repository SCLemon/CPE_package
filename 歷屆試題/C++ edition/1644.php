<!DOCTYPE html>
<html>
<head>
<title>uva1644</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1644</h1>
<pre class="prettyprint">
//uva1644
#include &lt;stdio.h&gt;
#define SIZE 1300000

int t[SIZE] = {0};

int main(void) {
    int i, j, n, gap;

    t[0] = t[1] = 1;
    for (i = 2; i &lt; SIZE; i++) {
        if(t[i] == 0) {
            for(j = i+i; j &lt; SIZE; j += i) 
                t[j] = 1;
        }
    }

	while (scanf(&quot;%d&quot;, &amp;n) &amp;&amp; n != 0) {
        gap = 0;
        for (i = n; t[i] != 0; i--) 
            gap++;
        for (i = n; t[i] != 0; i++) 
            gap++;

        printf(&quot;%d\n&quot;, gap);
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