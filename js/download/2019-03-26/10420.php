<!DOCTYPE html>
<html>
<head>
<title>uva10420</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10420</h1>
<pre class="prettyprint">
//uva10420
#include&lt;iostream&gt;
#include&lt;map&gt;
using namespace std;
int main(){
   map&lt;string,int&gt; count;
   map&lt;string,int&gt;::iterator iter;
   string first_s;
   char others[76]={0};
   int n;
   cin&gt;&gt;n;
   cin.ignore();
   while (n--){
      cin&gt;&gt;first_s;
      count[first_s]++;
      cin.getline(others,76);
   }
for (iter=count.begin(); iter!=count.end();iter++){
      cout&lt;&lt;iter-&gt;first&lt;&lt;&quot; &quot;;
      cout&lt;&lt;iter-&gt;second&lt;&lt;endl;
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