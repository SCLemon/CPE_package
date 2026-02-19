<!DOCTYPE html>
<html>
<head>
<title>uva10327</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10327</h1>
<pre class="prettyprint">
//uva10327
#include&lt;iostream&gt;
#include&lt;vector&gt;
using namespace std;
int main(){
  int n;
  while(cin&gt;&gt;n){
  	vector&lt;int&gt;a(n);for(auto&amp;v:a)cin&gt;&gt;v;
  	int ans=0;
    for(int i=0;i&lt;n;i++){
      for(int j=i;j&lt;n;j++){
      	ans+=(a[i]&gt;a[j]);
      }
  	}
		cout&lt;&lt;&quot;Minimum exchange operations : &quot;&lt;&lt;ans&lt;&lt;endl;
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