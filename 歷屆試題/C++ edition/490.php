<!DOCTYPE html>
<html>
<head>
<title>uva490</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva490</h1>
<pre class="prettyprint">
//uva490
#include &lt;iostream&gt;
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

using namespace std;

int main() {
    char s[105][105];
    int i = 0, j, k, maxlen = 0, l[105];
    while(gets(s[i])) {
        l[i] = strlen(s[i]);
        if(strlen(s[i]) &gt; maxlen)
            maxlen = strlen(s[i]);
        i++;
    }

    for(j = 0; j &lt; maxlen; j++) {
        for(k = 0; k &lt; i; k++) {
            if(j &lt; l[i - 1 - k])
                cout &lt;&lt; s[i - 1 - k][j];
            else
                cout &lt;&lt; &quot; &quot;;
        }
        cout &lt;&lt; endl;
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