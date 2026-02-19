<!DOCTYPE html>
<html>
<head>
<title>uva11321</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11321</h1>
<pre class="prettyprint">
//uva11321
#include &lt;iostream&gt;
#include &lt;algorithm&gt;
#include &lt;stdio.h&gt;
using namespace std;

struct Num {
	int  n,r;
	bool odd;
};

bool comp(const Num&amp; a, const Num&amp; b) {
	bool flag = false;
	if(a.r &lt; b.r) flag = true;
	else if(a.r == b.r) {
		if (a.odd &amp;&amp; !b.odd) flag = true;
		else if (!a.odd &amp;&amp; b.odd) flag = false;
		else if (a.odd &amp;&amp; b.odd) flag = (a.n &gt; b.n);
		else flag = (a.n &lt; b.n);
	}
	return flag;
}

int main() {
	int n,m,t;
	Num a[10000];
	while (cin &gt;&gt; n &gt;&gt; m &amp;&amp; !(n == 0 &amp;&amp; m == 0)) {
		cout &lt;&lt; n &lt;&lt; &quot; &quot; &lt;&lt; m &lt;&lt; endl;
		for (int i = 0; i &lt; n; i++) {
			cin &gt;&gt; t;
			a[i].n = t;
			a[i].r = t%m;
			if(t%2 != 0) a[i].odd = true;
			else a[i].odd = false;
		}
		sort(a, a + n,comp);
		for (int i = 0; i &lt; n; i++)
			cout &lt;&lt; a[i].n &lt;&lt; endl;
	}
	cout &lt;&lt; &quot;0 0&quot; &lt;&lt; endl;
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