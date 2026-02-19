<!DOCTYPE html>
<html>
<head>
<title>uva10815</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10815</h1>
<pre class="prettyprint">
//uva10815
#include&lt;iostream&gt;
#include&lt;set&gt;
#include&lt;string&gt;
using namespace std;
int main(){
  set&lt;string&gt;ans;
  string s;
  char c;
  while(cin.get(c)){
    if(isalpha(c)){s.push_back(tolower(c));continue;}
    if(s!=&quot;&quot;)ans.insert(s);s=&quot;&quot;;
  }
  if(s!=&quot;&quot;)ans.insert(s);s=&quot;&quot;;
  for(auto&amp;s:ans)cout&lt;&lt;s&lt;&lt;endl;
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