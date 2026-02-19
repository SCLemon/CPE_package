<!DOCTYPE html>
<html>
<head>
<title>uva11401</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11401</h1>
<pre class="prettyprint">
//uva11401
#include&lt;iostream&gt; 

using namespace std;

const int N = 1000000 + 10;
long long a[N];

int main() {
	
    a[3] = 0;
    for(long long i = 4; i &lt; N; i++) {
    	a[i] = a[i - 1] + ((i - 1) * (i - 2) / 2 - (i - 1 - i / 2)) / 2;
    }
    int n;
    while(cin &gt;&gt; n) {
	if(n &lt; 3) break;
    	cout &lt;&lt; a[n] &lt;&lt; endl;
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