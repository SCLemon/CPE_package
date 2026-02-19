<!DOCTYPE html>
<html>
<head>
<title>uva11995</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11995</h1>
<pre class="prettyprint">
//uva11995
#include &lt;iostream&gt;
#include &lt;stack&gt;
#include &lt;queue&gt;

using namespace std;

int main() {
	int n;
	while (cin &gt;&gt; n) {
		int i, ins, num;
		int isStk = 1, isQue = 1, isPriQue = 1;
		stack&lt;int&gt; myStk;
		queue&lt;int&gt; myQue;
		priority_queue&lt;int&gt; myPriQue;

		for (i = 0; i &lt; n; i++) {
			cin &gt;&gt; ins &gt;&gt; num;

			if (ins == 1) {
				myStk.push(num);
				myQue.push(num);
				myPriQue.push(num);
			}
			else if (ins == 2) {
				if (myStk.empty() || myStk.top() != num)
					isStk = 0;
				if (myQue.empty() || myQue.front() != num)
					isQue = 0;
				if (myPriQue.empty() || myPriQue.top() != num)
					isPriQue = 0;

				if (!myStk.empty())
					myStk.pop();
				if (!myQue.empty())
					myQue.pop();
				if (!myPriQue.empty())
					myPriQue.pop();
			}
		}

		if (isStk + isQue + isPriQue &gt; 1)
			cout &lt;&lt; &quot;not sure&quot; &lt;&lt; endl;
		else if (isStk == 1)
			cout &lt;&lt; &quot;stack&quot; &lt;&lt; endl;
		else if (isQue == 1)
			cout &lt;&lt; &quot;queue&quot; &lt;&lt; endl;
		else if (isPriQue == 1)
			cout &lt;&lt; &quot;priority queue&quot; &lt;&lt; endl;
		else
			cout &lt;&lt; &quot;impossible&quot; &lt;&lt; endl;
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