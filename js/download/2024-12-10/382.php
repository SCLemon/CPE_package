<!DOCTYPE html>
<html>
<head>
<title>uva382</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva382</h1>
<pre class="prettyprint">
//uva382
#include&lt;iostream&gt;
using namespace std;
int main(){
  int n;
  cout&lt;&lt;&quot;PERFECTION OUTPUT&quot;&lt;&lt;endl;
  while(cin&gt;&gt;n&amp;&amp;n){int sum=0;
    for(int d=1;d&lt;n;d++)if(n%d==0)sum+=d;
    printf(&quot;%5d  &quot;,n);
    if(sum&lt;n )cout&lt;&lt;&quot;DEFICIENT&quot;&lt;&lt;endl;
    if(sum&gt;n )cout&lt;&lt;&quot;ABUNDANT&quot;&lt;&lt;endl;
  	if(sum==n)cout&lt;&lt;&quot;PERFECT&quot;&lt;&lt;endl;
  }
  cout&lt;&lt;&quot;END OF OUTPUT&quot;&lt;&lt;endl;
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