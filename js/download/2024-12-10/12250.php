<!DOCTYPE html>
<html>
<head>
<title>uva12250</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12250</h1>
<pre class="prettyprint">
//uva12250
#include&lt;iostream&gt;
#include&lt;string&gt;
using namespace std;
int main(){string s;int T=0;
  while(cin&gt;&gt;s&amp;&amp;s!=&quot;#&quot;){cout&lt;&lt;&quot;Case &quot;&lt;&lt;++T&lt;&lt;&quot;: &quot;;
         if(s==&quot;HELLO&quot;       )cout&lt;&lt;&quot;ENGLISH&quot;&lt;&lt;endl;
    else if(s==&quot;HOLA&quot;        )cout&lt;&lt;&quot;SPANISH&quot;&lt;&lt;endl;
    else if(s==&quot;HALLO&quot;       )cout&lt;&lt;&quot;GERMAN&quot;&lt;&lt;endl;
    else if(s==&quot;BONJOUR&quot;     )cout&lt;&lt;&quot;FRENCH&quot;&lt;&lt;endl;
    else if(s==&quot;CIAO&quot;        )cout&lt;&lt;&quot;ITALIAN&quot;&lt;&lt;endl;
    else if(s==&quot;ZDRAVSTVUJTE&quot;)cout&lt;&lt;&quot;RUSSIAN&quot;&lt;&lt;endl;
    else                      cout&lt;&lt;&quot;UNKNOWN&quot;&lt;&lt;endl;
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