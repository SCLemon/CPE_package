<!DOCTYPE html>
<html>
<head>
<title>uva541</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva541</h1>
<pre class="prettyprint">
//uva541
#include&lt;iostream&gt;
#include&lt;vector&gt;
using namespace std;
int main(){int n;
  while(cin&gt;&gt;n,n){
    vector&lt;vector&lt;int&gt;&gt;a(n,vector&lt;int&gt;(n));
    for(auto&amp;r:a)for(auto&amp;v:r)cin&gt;&gt;v;
    int yn=1,tx=-1,ty=-1;
    for(int i=0;i&lt;n;i++){
      int xs=0;for(int k=0;k&lt;n;k++)xs+=a[i][k];
      int ys=0;for(int k=0;k&lt;n;k++)ys+=a[k][i];
      if(xs%2==0&amp;&amp;ys%2==0)continue;
      if(xs%2){if(tx==-1)tx=i;else{tx=-1;break;}}
      if(ys%2){if(ty==-1)ty=i;else{ty=-1;break;}}
      yn=0;
    }
    if(yn){cout&lt;&lt;&quot;OK&quot;&lt;&lt;endl;continue;}
    if(tx==-1||ty==-1){cout&lt;&lt;&quot;Corrupt&quot;&lt;&lt;endl;continue;}
		printf(&quot;Change bit (%d,%d)\n&quot;,tx+1,ty+1);
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