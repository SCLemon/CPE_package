<!DOCTYPE html>
<html>
<head>
<title>uva12820</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12820</h1>
<pre class="prettyprint">
//uva12820
#include&lt;iostream&gt;
#include&lt;cstdio&gt;

using namespace std;

int main() {
    int n, s, t, i, j, k;
    char c;

    s = 1;
    while(scanf(&quot;%d&quot;, &amp;n) != EOF){
    	getchar();
        t = 0;
        while(n--){
            int num[26] = {0};
            bool ans[30] = {};
            while(scanf(&quot;%c&quot;, &amp;c) != EOF){
            	if(c == &#39;\n&#39;)
            		break;
                num[c - &#39;a&#39;]++;
            }
            for(i = 0, j =0, k = 0; i &lt; 26; i++){
                if(num[i]){
                    j++;
                    if(ans[num[i]]){
                        k = 1;
                        break;
                    }
                    ans[num[i]] = 1;
                }
            }
            if(k == 0 &amp;&amp; j != 1)
                t++;
        }
        printf(&quot;Case %d: %d\n&quot;, s++, t);
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