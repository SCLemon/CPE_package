<!DOCTYPE html>
<html>
<head>
<title>uva302</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva302</h1>
<pre class="prettyprint">
//uva302
#include&lt;cstdio&gt;
#include&lt;cstdlib&gt;
#include&lt;cstring&gt;
#include&lt;iostream&gt;
#include&lt;vector&gt;
#include&lt;queue&gt;
#include&lt;list&gt;
#include&lt;algorithm&gt;
#define SIZE 50
#define BIG 2000

using namespace std;

struct road{
	int cnt, good;
	road(int num = 0, int v = 0) : cnt(num), good(v) {}
	bool operator &lt; (const road &amp; e) const {
		return cnt &gt;= e.cnt;
	}
};

int cari[BIG];
priority_queue&lt;road&gt; g[SIZE];

list&lt;int&gt; bvc(int x) {
	list&lt;int&gt; rail, form;
	while (!g[x].empty()) {
		road aux = g[x].top();
		g[x].pop();
		if (cari[aux.cnt])
			continue;
		cari[aux.cnt] = 1;
		form = bvc(aux.good);
		rail.splice(rail.begin(), form);
		rail.push_front(aux.cnt);
	}
	return rail;
}

int main() {
	int a, b, c, dig, go = 0, map[SIZE];
	bool check;
	while (cin &gt;&gt; a &gt;&gt; b) {
		if (a == 0 || b == 0)
			break;
		dig = 0;
		memset(map, 0, sizeof(map));
		memset(cari, 0, sizeof(cari));
		cin &gt;&gt; c;
		for (int i = 0; i &lt; SIZE; i++)
			while (!g[i].empty())
				g[i].pop();
			
		road e1(c, b);
		g[a].push(e1);
		road e2(c, a);
		g[b].push(e2);
		map[a]++; map[b]++;
		dig = max(dig, max(a, b));
		go = min(a, b);
		while (cin &gt;&gt; a &gt;&gt; b) {
			if (a == 0 || b == 0)
				break;
			cin &gt;&gt; c;
			road e3(c, b);
			road e4(c, a);
			g[b].push(e4);
			g[a].push(e3);
			map[a]++; map[b]++;
			dig = max(dig, max(a, b));
		}
		check = true;
		for (int i = 0; i &lt;= dig; i++)
			if (map[i] &amp; 1)
				check = false;
		if (check == false) {
			cout &lt;&lt; &quot;Round trip does not exist.&quot; &lt;&lt; endl;
			cout &lt;&lt; endl;
		}
		else {
			list&lt;int&gt; tail = bvc(go);
			for (list&lt;int&gt;::iterator it = tail.begin(); it != tail.end(); it++){
				if (it != tail.begin())
					cout &lt;&lt; &quot; &quot;;
				cout &lt;&lt; *it;
			}
			puts(&quot;\n&quot;);
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