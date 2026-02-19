<!DOCTYPE html>
<html>
<head>
<title>uva10931</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10931</h1>
<pre class="prettyprint">
//uva10931
#include &lt;iostream&gt;

const unsigned int MASK = 1&lt;&lt;31;

int main(){
  using namespace std;
  int input;
  while(cin &gt;&gt; input,input){
    cout &lt;&lt; &quot;The parity of &quot;;
    unsigned int mask = 1&lt;&lt;31;
    int count = 0;
    for(;mask&amp;&amp; !(mask&amp;input);mask &gt;&gt;= 1);

    for(;mask;mask &gt;&gt;= 1){
      cout &lt;&lt; 0 + !!(mask &amp; input);
      count += !!(mask &amp; input);
    }

   cout &lt;&lt; &quot; is &quot; &lt;&lt; count &lt;&lt; &quot; (mod 2).&quot;&lt;&lt; endl;


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