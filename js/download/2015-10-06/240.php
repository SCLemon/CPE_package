<!DOCTYPE html>
<html>
<head>
<title>uva240</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva240</h1>
<pre class="prettyprint">
//uva240
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt;
#include &lt;iostream&gt;

using namespace std;

struct symbol{
	int l;  // alphabet level
	int f;  // frequency
	int fa; // father
	int leaf; // -1 = not leaf, 0..1..2....n-1 means from left to right
	bool iss; // is symbol?
	bool exist; // can be merged?
	symbol(int _l = 0, int _f = 0, int _fa = 0, int _leaf = -1, bool _iss = true, bool _exist = true):\
	 l(_l), f(_f), fa(_fa), leaf(_leaf), iss(_iss), exist(_exist) {}
}v[100];

int R, N, num, vsize, tcnt = 0;
int lans[26];
char pans[26][26];

void huffman() {
	int i, j, del = 0;
	while(num != 1) {

		int pick[10];
		for(i = 0; i &lt; R; i++) {
			for(j = 0; j &lt; vsize &amp;&amp; v[j].exist == false; j++);

			int cur = j;
			for(j = cur+1; j &lt; vsize; j++) {
				if(v[j].exist == false) continue;
				if(v[j].f &lt; v[cur].f ||(v[j].f == v[cur].f &amp;&amp; v[j].l &lt; v[cur].l)) {
					cur = j;
				}
			}
			pick[i] = cur;
			v[cur].exist = false;
		}

		int tmpl = 27, tmpf = 0; // 27 is greater than 26
		for(i = 0; i &lt; R; i++) {
			tmpf += v[pick[i]].f;
			tmpl = min(tmpl, v[pick[i]].l);
			v[pick[i]].fa = vsize;
			v[pick[i]].leaf = i;
		}
		v[vsize] = symbol(tmpl, tmpf, -1, -1, false, true);
		del += R;
		num -=(R - 1);
		vsize++;
	}

	double totlen = 0, totfreq = 0;
	memset(lans, 0, sizeof(lans));
	for(i = 0; i &lt; vsize; i++) {
		if(v[i].iss == true) {
			int cur = i;
			while(v[cur].fa != -1) {
				pans[v[i].l][lans[v[i].l]] = &#39;0&#39; + v[cur].leaf;
				lans[v[i].l]++;
				cur = v[cur].fa;
			}
			totfreq += v[i].f;
			totlen += lans[v[i].l] * v[i].f;
		}
	}

	totlen /= totfreq;

	printf(&quot;Set %d; average length %.2lf\n&quot;, ++tcnt, totlen);
	for(i = 0; i &lt; N; i++) {
		printf(&quot;    %c: &quot;,&#39;A&#39;+i);
		for(j = lans[i]-1; j &gt;= 0; j --) {
			printf(&quot;%c&quot;,pans[i][j]);
		}
		printf(&quot;\n&quot;);
	}
	printf(&quot;\n&quot;);
}

int main() {
	int i, f;
	while(scanf(&quot;%d&quot;,&amp;R) &amp;&amp; R) {
		scanf(&quot;%d&quot;, &amp;N);
		for(i = 0; i * (R - 1) + R &lt; N; i++);
		num = i * (R - 1) + R;
		if(num != N) {
			num = num - N;
			for(i = 0; i &lt; num; i++) {
				v[i] = symbol(26, 0, -1, -1, false, true);
			}
		}
		else
			num = 0;

		for(i = 0; i &lt; N; i++, num++) {
			scanf(&quot;%d&quot;, &amp;f);
			v[num] = symbol(i, f, -1, -1, true, true);
		}
		vsize = num;
		huffman();
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