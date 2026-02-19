<!DOCTYPE html>
<html>
<head>
<title>uva10273</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10273</h1>
<pre class="prettyprint">
//uva10273
#include&lt;iostream&gt;
#include&lt;vector&gt;
#include&lt;algorithm&gt;
using namespace std;

int __gcd(int a,int b){
  if(a*b==0)return abs(a+b);
  while(a%=b)swap(a,b);
  return b;
}

int main() {
    int kase;
    cin&gt;&gt;kase;
    while(kase--){
        int n, days=1;
        cin&gt;&gt;n;
        vector&lt;vector&lt;int&gt;&gt; cows;
        for(int i=0;i&lt;n;i++){
            int sz;
            cin&gt;&gt;sz;
            vector&lt;int&gt; tmp(sz);
            days = days / __gcd(days, sz) * sz;
            for(auto&amp; x:tmp)
                cin&gt;&gt;x;
            cows.push_back(tmp);
        }
        vector&lt;bool&gt; eaten(n, false);
        int last_day = -1;
        for(int i=0;i&lt;last_day+days+1;i++){
            int m_cow = -1, alive = false;
            for(int j=0;j&lt;n;j++){
                if(eaten[j])continue;

                if(m_cow == -1){
                    m_cow = j;
                    continue;
                }
                int cur_cow = cows[j][i%cows[j].size()];
                int min_cow = cows[m_cow][i%cows[m_cow].size()];
                if(cur_cow == min_cow){
                    alive = true;
                    continue;
                }
                if(cur_cow &lt; min_cow){
                    alive = false;
                    m_cow = j;
                }
            }
            if(!alive &amp;&amp; m_cow!=-1){
                eaten[m_cow] = true;
                last_day = i;
                days = 1;
                for(int j = 0; j &lt; n; j++){
                    if(eaten[j]) continue;
                    days = days / __gcd(days, int(cows[j].size())) * cows[j].size();
                }
            }
        }
        int alive_num = 0;
        for(int i = 0; i &lt; n; i++)
            alive_num += !eaten[i];
        
        cout&lt;&lt; alive_num &lt;&lt; &quot; &quot; &lt;&lt; last_day+1 &lt;&lt; endl;
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