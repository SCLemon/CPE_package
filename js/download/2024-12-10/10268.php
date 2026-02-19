<!DOCTYPE html>
<html>
<head>
<title>uva10268</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10268</h1>
<pre class="prettyprint">
//uva10268
#include&lt;iostream&gt;
#include&lt;string&gt;
#include&lt;vector&gt;
#include&lt;sstream&gt;
using namespace std;
typedef long long ll;
int main(){
  ll x,v;string s;
  while(cin&gt;&gt;x){getline(cin,s);getline(cin,s);
    istringstream sin(s);
    vector&lt;ll&gt;a;while(sin&gt;&gt;v)a.insert(a.begin(),v);
    for(int k=0;k&lt;a.size();k++){
      a[k]*=k;
    }
    a.erase(a.begin());
    ll u=1,ans=0;
    for(auto&amp;v:a)ans+=u*v,u*=x;
    cout&lt;&lt;ans&lt;&lt;endl;
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