<!DOCTYPE html>
<html>
<head>
<title>uva10150</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10150</h1>
<pre class="prettyprint">
//uva10150
#include&lt;iostream&gt;
#include&lt;map&gt;
#include&lt;queue&gt;
#include&lt;stack&gt;
#include&lt;string&gt;
#include&lt;vector&gt;
#include&lt;algorithm&gt;

using namespace std;
vector&lt;vector&lt;int&gt;&gt; g;
vector&lt;int&gt; parent;
void BFS(int beg, int end){
    parent.assign(g.size(), -1);
    queue&lt;int&gt; q;
    q.push(beg);
    parent[beg] = beg;
    while(!q.empty()){
        int cur = q.front();
        q.pop();
        for(int i=0; i&lt;g[cur].size(); i++){
            if(parent[g[cur][i]]==-1){
                parent[g[cur][i]] = cur;
                if(g[cur][i]==end)
                    return;
                q.push(g[cur][i]);
            }
        }
    }
}
int main(){
    string s;
    vector&lt;string&gt; v;
    while(getline(cin, s)){
        if(s==&quot;&quot;)break;
        v.push_back(s);
    }
    sort(v.begin(), v.end());
    g.assign(v.size(), vector&lt;int&gt;());
    for(int i=0; i&lt;v.size(); i++){
        string alpha=&quot;abcdefghijklmnopqrstuvwxyz&quot;;
        for(int j=0;j&lt;min(int(v[i].size()), 16);++j){
            for(char c:alpha){
                string tmp=v[i];
                if(tmp[j]==c) continue;
                tmp[j]=c;
                auto it = lower_bound(v.begin(), v.end(), tmp);
                if(it!=v.end() &amp;&amp; *it==tmp){
                    g[i].push_back(it-v.begin());
                    g[it-v.begin()].push_back(i);
                }
            }
        }
    }
    for(auto&amp; vec:g)
        sort(vec.begin(), vec.end());
    int kase=0;
    string beg, end;
    while(cin&gt;&gt;beg&gt;&gt;end){
        if(kase++)cout&lt;&lt;endl;
        int b=find(v.begin(), v.end(), beg)-v.begin(), e=find(v.begin(), v.end(), end)-v.begin();
        BFS(b, e);
        vector&lt;int&gt; path;
        path.push_back(e);
        for(int cur=e; cur&gt;=0 &amp;&amp; cur!=parent[cur]; cur=parent[cur]){
            if(cur&gt;=0)path.push_back(parent[cur]);
        }
        reverse(path.begin(), path.end());
        if(path.size() &amp;&amp; path[0]==b){
            for(int &amp;e: path){
                cout&lt;&lt;v[e]&lt;&lt;endl;
            }
        }
        else
            cout&lt;&lt;&quot;No solution.&quot;&lt;&lt;endl;
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