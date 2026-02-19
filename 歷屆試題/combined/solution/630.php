<!DOCTYPE html>
<html>
<head>
<title>uva630</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva630</h1>
<pre class="prettyprint">
//uva630
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
#include &lt;cstring&gt;
#include &lt;algorithm&gt;

using namespace std;

int main(void) {
    int i, t, n, num;
    char word[1005][25], temp1[1005][25], test[25], temp2[25];

    scanf(&quot;%d&quot;, &amp;t);
    while(t--) {
        scanf(&quot;%d&quot;, &amp;n);

        for(i = 0; i &lt; n; ++i) {
            scanf(&quot;%s&quot;, word[i]);
            strcpy(temp1[i], word[i]);
            sort(&amp;temp1[i][0], &amp;temp1[i][0] + strlen(temp1[i]));
        }

        while(scanf(&quot;%s&quot;, test) &amp;&amp; test[0] != &#39;E&#39;) {
            printf(&quot;Anagrams for: %s\n&quot;, test);
            strcpy(temp2, test);
            sort(&amp;temp2[0], &amp;temp2[0] + strlen(temp2));
            for(i = 0, num = 0; i &lt; n; ++i)
                if(strcmp(temp2, temp1[i]) == 0)
					printf(&quot;%3d) %s\n&quot;, ++num, word[i]);
            if(num == 0) printf(&quot;No anagrams for: %s\n&quot;, test);
        }
		
        if(t) printf(&quot;\n&quot;);
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