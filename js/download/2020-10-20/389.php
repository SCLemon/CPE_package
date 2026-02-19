<!DOCTYPE html>
<html>
<head>
<title>uva389</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva389</h1>
<pre class="prettyprint">
//uva389
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
int main() {
    char number[50];
    int n, m;
    while(scanf(&quot;%s %d %d&quot;, number, &amp;n, &amp;m) == 3) {
        int i, len = strlen(number);
        long long dec = 0, j = 1;
        for(i = len-1; i &gt;= 0; i--) {
            if(number[i] &lt;= &#39;9&#39;)
                dec += (number[i]-&#39;0&#39;)*j;
            else
                dec += (number[i]-&#39;A&#39;+10)*j;
            j *= n;
        }
        int ans[60] = {}, idx = -1;
        while(dec &gt; 0)
            ans[++idx] = dec%m, dec /= m;
        if(idx &gt;= 7) {
            //puts(&quot;  ERROR&quot;);
            for(i = 6;i&gt;=0;i--)
            	printf(&quot;%c&quot;, ans[i] &lt; 10 ? ans[i]+&#39;0&#39; : ans[i]+&#39;A&#39;-10);
			puts(&quot;&quot;);
            continue;
        }
        if(idx &lt; 0) idx = 0;
        for(i = 6; i &gt; idx; i--)
            printf(&quot;0&quot;);
        for(i = idx; i &gt;= 0; i--)
            printf(&quot;%c&quot;, ans[i] &lt; 10 ? ans[i]+&#39;0&#39; : ans[i]+&#39;A&#39;-10);
        puts(&quot;&quot;);
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