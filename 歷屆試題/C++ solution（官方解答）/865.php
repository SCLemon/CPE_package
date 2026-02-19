<!DOCTYPE html>
<html>
<head>
<title>uva865</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva865</h1>
<pre class="prettyprint">
//uva865
#include &lt;cstdio&gt;
#include &lt;map&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;

using namespace std;

map&lt;char,char&gt; m;

int main() {
    int t;
    char str[70], str1[70], str2[70];

    scanf(&quot;%d&quot;,&amp;t);
    getchar();
    getchar();
    while (t--) {
        m.clear();

        gets(str1);
        gets(str2);
        cout &lt;&lt; str2 &lt;&lt; endl;
        cout &lt;&lt; str1 &lt;&lt; endl;
        for (int i = 0; i &lt; strlen(str1) &amp;&amp; i &lt; strlen(str2); i++)
            m[str1[i]] = str2[i];

        while (gets(str) &amp;&amp; strlen(str) != 0) {
            for (int i = 0; i &lt; strlen(str); i++) {
                putchar(m[str[i]] == 0 ? str[i] : m[str[i]]);
            }
            putchar(&#39;\n&#39;);
        }
        if (t != 0) putchar(&#39;\n&#39;);
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