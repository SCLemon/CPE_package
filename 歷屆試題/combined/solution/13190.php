<!DOCTYPE html>
<html>
<head>
<title>uva13190</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva13190</h1>
<pre class="prettyprint">
//uva13190
#include &lt;iostream&gt;
#include &lt;queue&gt;
#include &lt;string&gt;
#include &lt;sstream&gt;

using namespace std;

class data{
public:
	int priority;
	string name;
	int frequency;
	int moment;

	data (int pr, string na, int fr, int mo){
		priority = pr;
		name = na;
		frequency = fr;
		moment = mo;
	}

};

bool operator&lt;(const data&amp; d1, const data&amp; d2){
	bool cmp_monent = d1.moment &gt; d2.moment;
	bool cmo_priority = d1.priority &gt; d2.priority;
	if (d1.moment == d2.moment)
		return cmo_priority;
	else
		return cmp_monent;
}

int main(){

	int t, n, k, frequency;
	string name;
	ostringstream s;

	cin &gt;&gt; t;

	for (int i = 0; i &lt; t; i++) {
		cin &gt;&gt; n &gt;&gt; k;
		priority_queue&lt;data&gt; pq;

		for (int priority = 0; priority &lt; n; priority++) {
			cin &gt;&gt; name &gt;&gt; frequency;
			int monent = frequency;
			pq.push(data(priority, name, frequency, monent));
		}

		for (int j = 0; j &lt; k; j++) {
			data d = pq.top(); pq.pop();
			s &lt;&lt; d.moment &lt;&lt; &quot; &quot; &lt;&lt; d.name &lt;&lt; endl;
			pq.push(data(d.priority, d.name,
			        d.frequency, d.moment + d.frequency));
		}
	}
	cout &lt;&lt; s.str();
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