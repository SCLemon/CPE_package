<!DOCTYPE html>
<html>
<head>
<title>uva13171</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva13171</h1>
<pre class="prettyprint">
//uva13171
#include &lt;iostream&gt;
#include &lt;string&gt;

using namespace std;

int main() {
    int mag, yel, cyan;
    int T;
    cin &gt;&gt; T;
    while (T--) {
        cin &gt;&gt; mag &gt;&gt; yel &gt;&gt; cyan;
        string s;
        cin &gt;&gt; s;
        bool ok = true;
        for (int i = 0; i &lt; s.length() &amp;&amp; ok; i++) {
            if (s[i] == &#39;M&#39;)
                mag--;
            else if (s[i] == &#39;Y&#39;)
                yel--;
            else if (s[i] == &#39;C&#39;)
                cyan--;
            else if (s[i] == &#39;R&#39;)
                mag--, yel--;
            else if (s[i] == &#39;B&#39;)
                mag--, yel--, cyan--;
            else if (s[i] == &#39;G&#39;)
                yel--, cyan--;
            else if (s[i] == &#39;V&#39;)
                cyan--, mag--;
            else if (s[i] == &#39;W&#39;)
                ;
            ok = (mag &gt;= 0 &amp;&amp; yel &gt;= 0 &amp;&amp; cyan &gt;= 0);
        }
        if (ok) {
            printf(&quot;YES %d %d %d\n&quot;, mag, yel, cyan);
        } else
            printf(&quot;NO\n&quot;);
    }
    return 0;
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->