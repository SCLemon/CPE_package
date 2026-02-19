<!DOCTYPE html>
<html>
<head>
<title>uva612</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva612</h1>
<pre class="prettyprint">
//uva612
#include &lt;iostream&gt;
#include &lt;string&gt;
#include &lt;algorithm&gt;

using namespace std;

class DNA {
	public:
	string arr, Bak;
	int score, index;

	void Count(int n) {
		Bak = arr;
		score = 0;
		for(int i = 0; i &lt; n; ++i)
			for(int j = 1; j &lt; n; ++j)
				if(arr[j] &lt; arr[j-1]) {
					swap(arr[j], arr[j-1]);
					++score;
				}
		arr = Bak;
	}
};

bool cmp(DNA x, DNA y) {
	if(x.score != y.score)
		return x.score &lt; y.score;
	else
		return x.index &lt; y.index;
}

int main() {
	DNA S[100];
	int t;
	cin &gt;&gt; t;
	while(t--) {
		int n, m;
		cin &gt;&gt; n &gt;&gt; m;
		for(int i = 0; i &lt; m; ++i) {
			cin &gt;&gt; S[i].arr;
			S[i].index = i;
			S[i].Count(n);
		}

		sort(S, S + m, cmp);
		for(int i = 0; i &lt; m; ++i)
			cout &lt;&lt; S[i].arr &lt;&lt; endl;

		if(t)
			cout &lt;&lt; endl;
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