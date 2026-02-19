<!DOCTYPE html>
<html>
<head>
<title>uva1316</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1316</h1>
<pre class="prettyprint">
//uva1316
#include&lt;iostream&gt;
#include&lt;cstdio&gt;
#include&lt;cstring&gt;
#include&lt;algorithm&gt;

using namespace std;

struct item{
    int price, day;
};

bool cmp(const item&amp; a, const item&amp; b){
    return a.price &gt; b.price;
}

int main(){
    int n, ans;
    int i, j, k;
    int s[10005];
    item t[10005];
    while (scanf(&quot;%d&quot;, &amp;n) == 1){
        for(i = 0; i &lt; n; i++){
            scanf(&quot;%d%d&quot;, &amp;t[i].price, &amp;t[i].day);
        }
        sort(t, t+n, cmp);
        memset(s, -1, sizeof(s));
        ans = 0;
        for(i = 0; i &lt; n; i++){
            int v = t[i].day;
            for(;;){
                if (s[v] == -1){
                    k = v;
                    break;
                }
                else
                    v = s[v];
            }
            if(k){
                ans += t[i].price;
                s[k] = k - 1;
            }
        }
        printf(&quot;%d\n&quot;, ans);
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