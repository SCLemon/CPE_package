<!DOCTYPE html>
<html>
<head>
<title>uva10635</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10635</h1>
<pre class="prettyprint">
//uva10635
#include&lt;cstdio&gt;
#include&lt;cstring&gt;
#include&lt;algorithm&gt;
using namespace std;
const int inf=0x3f3f3f3f;
const int maxn=62510;
int s[maxn],num[maxn],d[maxn];
int main(){
    int t,tt=0;scanf(&quot;%d&quot;,&amp;t);
    while(t--){
        int n,p,q;
        scanf(&quot;%d%d%d&quot;,&amp;n,&amp;p,&amp;q);
        memset(num,0,sizeof num);
        for(int i=1;i&lt;=p+1;++i){
            int x;scanf(&quot;%d&quot;,&amp;x);
            num[x]=i;
        }
        n=0;
        for(int i=0;i&lt;=q;++i){
            int x;scanf(&quot;%d&quot;,&amp;x);
            if(num[x]) s[n++]=num[x];
        }
        fill(d,d+n,inf);
        for(int i=0;i&lt;n;++i) *lower_bound(d,d+n,s[i])=s[i];
        printf(&quot;Case %d: %d\n&quot;,++tt,int(lower_bound(d,d+n,inf)-d));
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