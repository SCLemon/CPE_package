<!DOCTYPE html>
<html>
<head>
<title>uva11743</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11743</h1>
<pre class="prettyprint">
//uva11743
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
#include &lt;stdlib.h&gt;

using namespace std;

int main(void) {
    int N, i;
    scanf(&quot;%d&quot;, &amp;N);
    int cred[16];
    while(N--) {
        int a, b;
        for(i = 0; i &lt; 4; i++) {
            scanf(&quot;%d&quot;, &amp;a);
            cred[i * 4 + 3] = a % 10;
            a = a / 10;
            cred[i * 4 + 2] = a % 10;
            a = a / 10;
            cred[i * 4 + 1 ] = a % 10;
            a = a / 10;
            cred[i * 4] = a % 10;
        }
        b = 0;
        for(i = 0; i &lt; 16; i = i + 2) {
            a = cred[i] * 2;
            b = b + a % 10;
            a = a / 10;
            b = b + a % 10;
        }
        for(i = 1; i &lt; 16; i = i + 2)
            b = b + cred[i];
        if(b % 10)
            printf(&quot;Invalid\n&quot;);
        else
            printf(&quot;Valid\n&quot;);
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