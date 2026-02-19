<!DOCTYPE html>
<html>
<head>
<title>uva1200</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1200</h1>
<pre class="prettyprint">
//uva1200
#include &lt;stdio.h&gt;
#include &lt;math.h&gt;
void parse(char *s, int&amp; A, int&amp; B) {
    A = 0, B = 0;
    int i, g = 0, f = 0, neg = 1;
    for(i = 0; s[i]; i++) {
        if(s[i] == &#39;x&#39;) {
            if(g)
                A += neg*f;
            else
                A += neg;
            g = 0, f = 0, neg = 1;
        } else {
            if(s[i] == &#39;-&#39;) {
                if(g)
                    B += neg*f;
                g = 0, f = 0;
                neg = -1;
            } else if(s[i] == &#39;+&#39;) {
                if(g)
                    B += neg*f;
                g = 0, f = 0;
                neg = 1;
            } else
                f = f * 10 + s[i]-&#39;0&#39;, g = 1;
        }
    }
    if(g)
        B += neg*f;
}
int main() {
    int t, i;
    scanf(&quot;%d&quot;, &amp;t);
    char s1[502], *s2;
    while(t--) {
        scanf(&quot;%s&quot;, s1);
        for(i = 0; s1[i]; i++) {
            if(s1[i] == &#39;=&#39;) {
                s2 = s1 + i + 1;
                s1[i] = &#39;\0&#39;;
                break;
            }
        }
        int la, lb, ra, rb;
        parse(s1, la, lb);
        parse(s2, ra, rb);
        if(la == ra &amp;&amp; lb == rb)
            puts(&quot;IDENTITY&quot;);
        else if(la == ra &amp;&amp; lb != rb)
            puts(&quot;IMPOSSIBLE&quot;);
        else
            printf(&quot;%d\n&quot;, (int)floor((double)(rb - lb)/(la - ra)));
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