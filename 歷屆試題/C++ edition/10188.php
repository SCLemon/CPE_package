<!DOCTYPE html>
<html>
<head>
<title>uva10188</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10188</h1>
<pre class="prettyprint">
//uva10188
#include &lt;bits/stdc++.h&gt;
using namespace std;

int main(){
	int n,m;
	int x=0,y=0;  // x: round counter, y: input length sum 
	string input,output,answer;
	bool ac,pe;
	while(cin &gt;&gt; n &amp;&amp; n){
		cin.ignore();  // ignore the &#39;\n&#39; after integer
		++x;
		int y = 0;     // initialize
		output = &quot;&quot;;
		answer = &quot;&quot;;
		// read in first inputs
		for(int i=0 ; i &lt; n ; ++i){
			getline(cin,input);
			y += input.length();
			if(i){
				output += &#39;\n&#39;;
				output += input;
			}else{
				output = input;
			}
		}
		
		cin &gt;&gt; m;
		cin.ignore();
		// read in second inputs
		for(int i=0 ; i &lt; m ; ++i){
			getline(cin,input);
			if(i){
				answer += &#39;\n&#39;;
				answer += input;
			}else{
				answer = input;
			}
		}
		
		// assume ac first
		ac = true;
		if(output != answer) ac = false;
		if(ac){
//			cout &lt;&lt; &quot;Run #&quot; &lt;&lt; x &lt;&lt; &quot;: Accepted&quot; &lt;&lt; endl;        // uva format 
			cout &lt;&lt; &quot;Run #&quot; &lt;&lt; x &lt;&lt; &quot;: Accepted &quot; &lt;&lt; y &lt;&lt; endl;  // cpe format
			continue;
		}
		
		// then assume pe
		pe = true;
		for(int i=0 ; i &lt; output.length() ; ++i){
			if(output[i] == &#39; &#39; || output[i] == &#39;\n&#39;){  // erase &#39; &#39; &amp; &#39;\n&#39;
				output.erase(i,1);
				--i;
			}
		}
		for(int i=0 ; i &lt; answer.length() ; ++i){
			if(answer[i] == &#39; &#39; || answer[i] == &#39;\n&#39;){  // erase &#39; &#39; &amp; &#39;\n&#39;
				answer.erase(i,1);
				--i;
			}
		}
		if(output != answer) pe = false;
		if(pe){
//			cout &lt;&lt; &quot;Run #&quot; &lt;&lt; x &lt;&lt; &quot;: Presentation Error&quot; &lt;&lt; endl;       // uva format
			cout &lt;&lt; &quot;Run #&quot; &lt;&lt; x &lt;&lt; &quot;: Presentation Error &quot; &lt;&lt; y &lt;&lt; endl; // cpe format
			continue;
		}
		
//		cout &lt;&lt; &quot;Run #&quot; &lt;&lt; x &lt;&lt; &quot;: Wrong Answer&quot; &lt;&lt; endl;        // uva format
		cout &lt;&lt; &quot;Run #&quot; &lt;&lt; x &lt;&lt; &quot;: Wrong Answer &quot; &lt;&lt; y &lt;&lt; endl;  // cpe format
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