<!DOCTYPE html>
<html>
<head>
<title>uva10101</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10101</h1>
<pre class="prettyprint">
//uva10101
#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;
string table[] = {&quot;&quot;, &quot;shata&quot;, &quot;hajar&quot;, &quot;lakh&quot;, &quot;kuti&quot;};

int main() {
	int i = 1;
	long long int n;
	while((cin &gt;&gt; n)){
		string s = &quot;&quot;;
		int t = 1, temp = 0;

		if(n == 0)
			s = &quot;0&quot;;
		else{
			temp = n % 100;
			if(temp != 0)
				s.insert(0, to_string(temp));
			n = n /100;
		}
		while(n&gt;0){
			if(t % 4 == 1){
				temp = n % 10;
				n /= 10;
			}
			else{
				temp = n % 100;
				n /= 100;
			}
			if(temp != 0){
				if(s.compare(&quot;&quot;) != 0)
					s.insert(0, to_string(temp) + &quot; &quot; + table[t] + &quot; &quot;);
				else
					s.insert(0, to_string(temp) + &quot; &quot; + table[t]);
			}
			else if(temp == 0 &amp;&amp; t % 4 == 0){
				if(s.compare(&quot;&quot;) != 0)
					s.insert(0, table[t] + &quot; &quot;);
				else
					s.insert(0, table[t]);
			}
			t = (t % 4) + 1;
		}
		if(i &lt; 10)
			cout &lt;&lt; &quot;   &quot;;
		else if(i &lt; 100)
			cout &lt;&lt; &quot;  &quot;;
		else if(i &lt; 1000)
			cout &lt;&lt; &quot; &quot;;
		cout &lt;&lt; i++ &lt;&lt; &quot;. &quot; &lt;&lt; s &lt;&lt; endl;
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