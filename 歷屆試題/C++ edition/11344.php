<!DOCTYPE html>
<html>
<head>
<title>uva11344</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11344</h1>
<pre class="prettyprint">
//uva11344
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;

using namespace std;

int t, N, n[15];
char str[1000 + 5];

bool check() {
    int res;
    for (int i = 0; i &lt; N; i++) {
        res = 0;
        for (int j = 0; j &lt; strlen(str); j++) {
            res = (res * 10) + (str[j] - &#39;0&#39;);
            res = res % n[i];
        }
        if (res != 0) return false;
    }

    return true;
}

int main() {
    scanf(&quot;%d&quot;, &amp;t);
    while (t--) {
        scanf(&quot;%s&quot;, &amp;str);
        scanf(&quot;%d&quot;, &amp;N);
        for (int i = 0; i &lt; N; i++)
            scanf(&quot;%d&quot;, &amp;n[i]);
        if (check())
            printf(&quot;%s - Wonderful.\n&quot;, str);
        else
            printf(&quot;%s - Simple.\n&quot;, str);
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