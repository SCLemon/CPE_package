<!DOCTYPE html>
<html>
<head>
<title>uva10690</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10690</h1>
<pre class="prettyprint">
//uva10690
#include &lt;bits/stdc++.h&gt;

using namespace std;
#define maxn 10101
int main() {
    int n, m;
    while(cin &gt;&gt; n &gt;&gt; m){
        int sum=0;
        vector&lt;int&gt; a(n+m);
        for(auto&amp;e:a){
            cin&gt;&gt;e;
            sum+=e;
        }
        vector&lt;bitset&lt;maxn&gt;&gt; table(min(n, m)+1);
        table[0][0]=true;
        for(int i=0; i&lt;a.size(); i++){
            for(int j=table.size()-2;j&gt;=0;--j){
                table[j+1] |= table[j]&lt;&lt;(a[i]+50);
            }
        }
        int Min=INT_MAX, Max=INT_MIN;
        auto k = table.back();
        for(int i=0;i&lt;maxn;++i){
            if(k[i]){
                int tmp = i-50*table.size()+50;
                int re = sum - tmp;
                Min = min(Min, tmp*re);
                Max = max(Max, tmp*re);
            }
        }
        cout &lt;&lt; Max &lt;&lt; &quot; &quot; &lt;&lt; Min &lt;&lt; endl;
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