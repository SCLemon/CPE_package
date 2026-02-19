<!DOCTYPE html>
<html>
<head>
<title>uva441</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva441</h1>
<pre class="prettyprint">
//uva441
#include&lt;iostream&gt;
#include&lt;vector&gt;
using namespace std;
int main(){
  int n,pd=0;
  while(cin&gt;&gt;n,n){if(pd++)cout&lt;&lt;endl;
    vector&lt;int&gt;d(n);for(auto&amp;v:d)cin&gt;&gt;v;
    int a[7]={-1};
    #define F(K) for(a[K]=a[K-1]+1;a[K]&lt;n;a[K]++){
    F(1)F(2)F(3)F(4)F(5)F(6)
      for(int k=0;k&lt;6;k++){
      	if(k)cout&lt;&lt;&quot; &quot;;cout&lt;&lt;d[a[k+1]];
      }
      cout&lt;&lt;endl;
    }}}}}}
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