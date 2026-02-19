<!DOCTYPE html>
<html>
<head>
<title>uva1234</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1234</h1>
<pre class="prettyprint">
//uva1234
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;queue&gt;
#include &lt;tuple&gt;

using namespace std;

#define INF 0x3f3f3f3f

vector&lt;int&gt; UF;

int FIND(int x){
    if (UF[x] == x) return x;
    return UF[x] = FIND(UF[x]);
}
void UNION(int x, int y){
    if (FIND(x)!=FIND(y))
        UF[FIND(x)] = FIND(y);
}

int main() {
    int kase;
    cin&gt;&gt;kase;
    while(kase--) {
        int n, m, sum=0;
        cin&gt;&gt;n&gt;&gt;m;
        UF.resize(n);
        for(int i=0;i&lt;n;i++)UF[i] = i;
        vector&lt;pair&lt;int, int&gt;&gt; edges;
        priority_queue&lt;pair&lt;int, int&gt;&gt; q;
        for(int i=0;i&lt;m;i++){
            int b, e, w;
            cin&gt;&gt;b&gt;&gt;e&gt;&gt;w;
            sum += w;
            edges.push_back({b-1, e-1});
            q.push({w, i});
        }
        while(q.size()){
            int w, idx;
            tie(w, idx) = q.top();
            q.pop();
            if(FIND(edges[idx].first) != FIND(edges[idx].second)){
                sum -= w;
                UNION(edges[idx].first, edges[idx].second);
            }
        }
        cout&lt;&lt;sum&lt;&lt;endl;
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