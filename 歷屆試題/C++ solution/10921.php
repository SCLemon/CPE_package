<!DOCTYPE html>
<html>
<head>
<title>uva10921</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10921</h1>
<pre class="prettyprint">
//uva10921
#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main(){
	string s;
	int cap, hyphen;
	while(cin &gt;&gt; s){
		cap = 0;
		hyphen = 0;
		for(int i = 0 ; i &lt; s.length() ; i++){
            if(s[i] == &#39;0&#39;)
                cout &lt;&lt; 0;
			else if(s[i] == &#39;1&#39;)
				cout &lt;&lt; 1;
			else if(s[i] == &#39;-&#39;){
				cout &lt;&lt; &#39;-&#39;;
				hyphen++;
			}
			else if(&#39;A&#39;&lt;=s[i] &amp;&amp; s[i]&lt;=&#39;C&#39;){
				cout &lt;&lt; 2;
				cap++;
			}
			else if(&#39;D&#39;&lt;=s[i] &amp;&amp; s[i]&lt;=&#39;F&#39;){
				cout &lt;&lt; 3;
				cap++;
			}
			else if(&#39;G&#39;&lt;=s[i] &amp;&amp; s[i]&lt;=&#39;I&#39;){
				cout &lt;&lt; 4;
				cap++;
			}
			else if(&#39;J&#39;&lt;=s[i] &amp;&amp; s[i]&lt;=&#39;L&#39;){
				cout &lt;&lt; 5;
				cap++;
			}
			else if(&#39;M&#39;&lt;=s[i] &amp;&amp; s[i]&lt;=&#39;O&#39;){
				cout &lt;&lt; 6;
				cap++;
			}
			else if(&#39;P&#39;&lt;=s[i] &amp;&amp; s[i]&lt;=&#39;S&#39;){
				cout &lt;&lt; 7;
				cap++;
			}
			else if(&#39;T&#39;&lt;=s[i] &amp;&amp; s[i]&lt;=&#39;V&#39;){
				cout &lt;&lt; 8;
				cap++;
			}
			else if(&#39;W&#39;&lt;=s[i] &amp;&amp; s[i]&lt;=&#39;Z&#39;){
				cout &lt;&lt; 9;
				cap++;
			}
		}
		cout &lt;&lt; &quot; &quot; &lt;&lt; cap &lt;&lt; &quot; &quot; &lt;&lt; hyphen &lt;&lt;endl;
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