<!DOCTYPE html>
<html>
<head>
<title>uva10626</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10626</h1>
<pre class="prettyprint">
//uva10626
#include&lt;iostream&gt;
#include&lt;algorithm&gt;
using namespace std;
int main(){
    int kase;
    cin&gt;&gt;kase;
    while (kase--){
        int c, n[3];
        cin&gt;&gt;c&gt;&gt;n[0]&gt;&gt;n[1]&gt;&gt;n[2];
        int used[3] = {0}, cnt=0;

        int tmp = min(c, n[2]);
        used[2] += tmp;
        n[0] += tmp*2;
        cnt += tmp;
        c -= tmp;
        if (c==0) {
            cout&lt;&lt;cnt&lt;&lt;endl;
            continue;
        }

        tmp = min(c, n[1]/2);
        used[1] += tmp*2;
        cnt += tmp*2;
        c -= tmp;
        n[0] += tmp*2;
        if(c==0){
            cout&lt;&lt;cnt&lt;&lt;endl;
            continue;
        }
        int cover[3]={0};
        if(c&gt;0 &amp;&amp; n[1]-used[1]&gt;0){
            --c;
            cnt+=4;
            used[1]++;
            used[0]+=3;
            cover[1]++;
        }
        used[0]+=8*c;
        cnt+=8*c;
        c=0;
        for(int i=0;i&lt;150;++i){
            if(used[1]-cover[1]&gt;1 &amp;&amp; used[0]-cover[0]&gt;=8){
                cover[1]+=2;
                cover[0]+=6;
                n[0]-=2;
                used[0]-=2;
                cnt-=2;
                continue;
            }
            if(used[2]-cover[2]&gt;0 &amp;&amp; used[0]-cover[0]&gt;=8){
                cover[2]++;
                cover[1]++;
                cover[0]+=6;
                n[0]-=2;
                used[0]-=2;
                --cnt;
                continue;
            }
        }
        cout&lt;&lt;cnt&lt;&lt;endl;
    }
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