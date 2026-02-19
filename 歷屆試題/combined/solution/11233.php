<!DOCTYPE html>
<html>
<head>
<title>uva11233</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11233</h1>
<pre class="prettyprint">
//uva11233
#include&lt;iostream&gt;
#include&lt;string.h&gt;
using namespace std;
int main(){
	int L, N;
	bool hasPrinted;
	char irregular[20][2][20], words[20];
	cin &gt;&gt; L &gt;&gt; N;
	for(int i = 0; i &lt; L; i++){
		cin &gt;&gt; irregular[i][0] &gt;&gt; irregular[i][1];
	}
	for(int i = 0; i &lt; N; i++){
		cin &gt;&gt; words;
		hasPrinted = false;
		for(int j = 0; j &lt; L; j++){
			if (!strcmp(words, irregular[j][0])){
				cout &lt;&lt; irregular[j][1] &lt;&lt; endl;
				hasPrinted = true;
				break;
			}
		}
		if (hasPrinted == true) continue;
		int length = strlen(words);
		char output[20] = &quot;&quot;;
		if (words[length-1] == &#39;y&#39; &amp;&amp; (words[length-2] != &#39;a&#39; &amp;&amp; words[length-2] != &#39;e&#39; &amp;&amp; words[length-2] != &#39;i&#39; &amp;&amp; words[length-2] != &#39;o&#39; &amp;&amp; words[length-2] != &#39;u&#39;)) {
			strncpy(output, words, length-1);
			strcat(output, &quot;ies&quot;);
			cout &lt;&lt; output &lt;&lt; endl;
		}
		else if (words[length-1] == &#39;o&#39; || words[length-1] == &#39;s&#39; || words[length-1] == &#39;x&#39;) {
			strcpy(output, words);
			strcat(output, &quot;es&quot;);
			cout &lt;&lt; output &lt;&lt; endl;
		}
		else if (words[length-2] == &#39;c&#39; &amp;&amp; words[length-1] == &#39;h&#39;) {
			strcpy(output, words);
			strcat(output, &quot;es&quot;);
			cout &lt;&lt; output &lt;&lt; endl;
		}
		else if(words[length-2] == &#39;s&#39; &amp;&amp; words[length-1] == &#39;h&#39;){
			strcpy(output, words);
			strcat(output, &quot;es&quot;);
			cout &lt;&lt; output &lt;&lt; endl;
		}
		else{
			strcpy(output, words);
			strcat(output, &quot;s&quot;);
			cout &lt;&lt; output &lt;&lt; endl;
		}
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