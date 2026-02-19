<!DOCTYPE html>
<html>
<head>
<title>uva1587</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1587</h1>
<pre class="prettyprint">
//uva1587
#include &lt;stdio.h&gt;

struct pallet {
	int w, h;
} box[6];

int n = 6;
int result = 0;

void swap(int *x, int *y) {
	int temp;
	temp = *x;
	*x = *y;
	*y = temp;
}

void sort(int n) {
	int min;

	for (int i = 0; i &lt; n - 1; i++) {
		min = i;
		for (int j = i + 1; j &lt; n; j++){
			if (box[j].w &lt; box[min].w)
				min = j;
		}

		swap(&amp;box[i].w, &amp;box[min].w);
		swap(&amp;box[i].h, &amp;box[min].h);
	}

	for (int i = 0; i &lt; n - 1; i++) {
		min = i;
		for (int j = i + 1; j &lt; n; j++){
			if (box[j].h &lt; box[min].h)
				min = j;			
		}
		if (box[min].w &lt;= box[i].w) {
			swap(&amp;box[i].w, &amp;box[min].w);
			swap(&amp;box[i].h, &amp;box[min].h);
		}
	}
}

int compare() {
	if (box[0].w == box[1].w &amp;&amp; box[0].h == box[1].h &amp;&amp; box[2].w == box[3].w &amp;&amp; 
	    box[2].h == box[3].h &amp;&amp; box[4].w == box[5].w &amp;&amp; box[4].h == box[5].h) {
			
		if (box[0].w == box[2].w &amp;&amp; box[0].h == box[4].w &amp;&amp; box[2].h == box[4].h)
			result = 1;
		else 
			result = 0;	
	}
	else 
		result = 0;

	return result;
}

int main() {

	while (~scanf(&quot;%i %i&quot;, &amp;box[0].w, &amp;box[0].h)) {
		if (box[0].w &gt; box[0].h)
			swap(&amp;box[0].w, &amp;box[0].h);

		for (int i = 1; i &lt; 6; i++) {
			scanf(&quot;%i %i&quot;, &amp;box[i].w, &amp;box[i].h);
			if (box[i].w &gt; box[i].h)
				swap(&amp;box[i].w, &amp;box[i].h);
		}

		sort(n);

		result = compare();
		if (result == 0)
			printf(&quot;IMPOSSIBLE\n&quot;);
		else 
			printf(&quot;POSSIBLE\n&quot;);
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