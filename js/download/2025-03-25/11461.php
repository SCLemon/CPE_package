<!DOCTYPE html>
<html>
<head>
<title>uva11461</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11461</h1>
<pre class="prettyprint">
//uva11461
#include&lt;iostream&gt;
#include&lt;cmath&gt;
using namespace std;
int main(){
  int a,b;
  while(cin&gt;&gt;a&gt;&gt;b&amp;&amp;(a*b)){
    int ia=sqrt(a),ib=sqrt(b);
    if((ia+1)*(ia+1)==a)ia++;
    if((ib+1)*(ib+1)==b)ib++;
    int ans=ib-ia+(ia*ia==a);
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