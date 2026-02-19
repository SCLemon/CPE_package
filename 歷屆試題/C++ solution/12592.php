<!DOCTYPE html>
<html>
<head>
<title>uva12592</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12592</h1>
<pre class="prettyprint">
//uva12592
#include&lt;cstdio&gt;
#include&lt;iostream&gt;
#include&lt;map&gt;
#include&lt;string&gt;

using namespace std;

int main(){
	int t, n;
	string in, in2;
	map &lt;string,string&gt; out;
	map &lt;string,string&gt;::iterator it;
	cin &gt;&gt; t;
	getchar();
	while(t--){
		getline(cin,in);
		getline(cin,in2);
		out[in] = in2;
	}
	cin &gt;&gt; n;
	getchar();
	while (n--){
		getline(cin,in);
		it = out.begin();
		while (it != out.end()){
		    if (it-&gt;first == in){
				cout &lt;&lt; it-&gt;second &lt;&lt; endl;
				break;
			}
			else if (it-&gt;second==in){
				cout &lt;&lt; it-&gt;first &lt;&lt; endl;
				break;
			}
			it++;
		}
	}
	return 0;
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->