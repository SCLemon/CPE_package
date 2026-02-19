<!DOCTYPE html>
<html>
<head>
<title>uva12385</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12385</h1>
<pre class="prettyprint">
//uva12385
#include&lt;iostream&gt;
#include&lt;cstdio&gt;
#define max(a,b) ((a)&gt;(b)?(a):(b))

main(){
    int t, n, i;
    int s[100010];
    int last[100010];

    scanf(&quot;%d&quot;,&amp;n);
    while (n--){
        scanf(&quot;%d&quot;,&amp;t);
        for (i = 0; i &lt; t; i++){
            scanf(&quot;%d&quot;,&amp;s[i]);
            last[s[i]] = 0;
        }
		int ans[100010] = {0};
        last[s[0]] = 1;
        ans[0] = 0;
        for (i = 1; i &lt; t; i++){
            if (last[s[i]] != 0){
                ans[i] = max(ans[i - 1], ans[last[s[i]]] + 1);
            }
            else
                ans[i] = ans[i-1];
            last[s[i]] = i;
        }

        printf(&quot;%d\n&quot;, ans[t-1]);
    }
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