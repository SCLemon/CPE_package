<!DOCTYPE html>
<html>
<head>
<title>uva288</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva288</h1>
<pre class="prettyprint">
//uva288
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;ctype.h&gt;
#include &lt;string.h&gt;
#define MYDIG	100

int lastchar = -1;
struct longnum {
	int *n;
	int sign;
	int msd;
};

typedef struct longnum LNUM;
char runops[128] = {0};
char op = 0;
LNUM num[128], mytmp, myexp;
int sp = 0;

void showans() {
	LNUM* a = num;
	int k;
	char dump[4000], *p = dump;
	int i, len;
	if(a -&gt; sign == -1)p += sprintf(p, &quot;-&quot;);
	p += sprintf(p, &quot;%d&quot;, a -&gt; n[a -&gt; msd-1]);
	for(k = a -&gt; msd-2; k &gt;= 0; --k)
		p += sprintf(p, &quot;%02d&quot;, a -&gt; n[k]);
	len = p - dump;
	
	for(i = 0; len &gt; 75; len -= 75, i += 75)
		printf(&quot;%.75s\\\\\n&quot;, dump + i);
	printf(&quot;%s&quot;, dump + i);
	putchar(&#39;\n&#39;);
	free(a -&gt; n);
}

void domul(LNUM *a, LNUM *b){
	if(a -&gt; msd == 1 &amp;&amp; a -&gt; n[0] == 0) return;
	if(b -&gt; msd == 1 &amp;&amp; b -&gt; n[0] == 0) {
		a -&gt; msd = 1;
		a -&gt; sign = 1;
		a -&gt; n[0] = 0;
		return;
	}
	if(b -&gt; msd == 1 &amp;&amp; b -&gt; n[0] == 1) return;
	LNUM *t = &amp;mytmp;
	LNUM *c, *d;
	int i, k, j;
	int newsign = a -&gt; sign*b -&gt; sign;
	if(a -&gt; msd &gt; b -&gt; msd) {
		c = a;
		d = b;
	}
	else {
		c = b;
		d = a;
	}
	int *tn = (int*)malloc(sizeof(int) * (a -&gt; msd + b -&gt; msd));
	int cy, sum;
	for(i = cy = 0; i &lt; d -&gt; msd - 1; ++i) {
		for(sum = cy, k = 0; k &lt;= i; k++)
			sum = sum + c -&gt; n[i - k] * d -&gt; n[k];
		tn[i] = sum % MYDIG;
		cy = sum / MYDIG;
	}
	for(; i &lt; c -&gt; msd; ++i) {
		for(sum = cy, k = 0; k &lt; d -&gt; msd; k++)
			sum = sum + c -&gt; n[i - k] * d -&gt; n[k];
		tn[i] = sum % MYDIG;
		cy = sum / MYDIG;
	}
	for(j = 1; i &lt; c -&gt; msd + d -&gt; msd - 1; ++i, ++j) {
		for(sum = cy, k = j; k &lt; d -&gt; msd; k++)
			sum = sum + c -&gt; n[i - k] * d -&gt; n[k];
		tn[i] = sum % MYDIG;
		cy = sum / MYDIG;
	}
	if(cy &gt; 0) tn[i++] = cy;
	a -&gt; msd = i;
	free(a -&gt; n);
	a -&gt; n = tn;
	a -&gt; sign = newsign;
}

void doadd(LNUM *a, LNUM *b) {
	LNUM *c;
	int min, max;
	if(a -&gt; msd &gt; b -&gt; msd) {
		c = a;
		max = a -&gt; msd;
		min = b -&gt; msd;
	}
	else {
		c = b;
		max = b -&gt; msd;
		min = a -&gt; msd;
	}
	int *tn = (int*)malloc(sizeof(int) * (max + 1));
	int i, cy, sum;
	for(cy = i = 0; i &lt; min; ++i){
		sum = cy + a -&gt; n[i] + b -&gt; n[i];
		tn[i] = sum % MYDIG;
		cy = sum / MYDIG;
	}
	for(; i &lt; max; ++i){
		sum = cy + c -&gt; n[i];
		tn[i] = sum % MYDIG;
		cy = sum / MYDIG;
	}
	if(cy &gt; 0) tn[i++] = cy;
	a -&gt; msd = i;
	free(a -&gt; n);
	a -&gt; n = tn;
}

void doexp(LNUM *a, LNUM *b){
	if(a -&gt; msd == 1 &amp;&amp; a -&gt; n[0] == 1)
		return;
	if(b -&gt; msd == 1 &amp;&amp; b -&gt; n[0] == 0) {
		a -&gt; msd = 1;
		a -&gt; sign = 1;
		a -&gt; n[0] = 1;
		return;
	}
	if(b -&gt; msd == 1 &amp;&amp; b -&gt; n[0] == 1)
		return;
#define MYEXPSHIFT 16
#define MYEXPMASK 0xffff
	unsigned long v[100];
	int i, j, vlen = 0,  sum,  cy;
	for(i = 0; i &lt; 100; ++i) v[i] = 0;
	for(i = b -&gt; msd - 1; i &gt;= 0;--i) {
		for(sum = b -&gt; n[i], cy = j = 0; j &lt;= vlen; j++){
			sum += v[j] * MYDIG + cy;
			v[j] = sum &amp; MYEXPMASK;
			cy = sum &gt;&gt; MYEXPSHIFT;
			sum = 0;
		}
		if(cy){
			v[j++] = cy;
			vlen++;
		}
	}
	int *tn = (int*)malloc(sizeof(int) * 1);
	LNUM*e = &amp;myexp;
	e -&gt; n = a -&gt; n;
	e -&gt; sign = a -&gt; sign;
	e -&gt; msd = a -&gt; msd;
	a -&gt; sign = 1;
	a -&gt; msd = 1;
	a -&gt; n = tn;
	a -&gt; n[0] = 1;
	for(i = 0; i &lt;= vlen; ++i) {
		for(j = 0; j &lt; 16; ++j) {
			if((v[i] &amp; 1) == 1) domul(a, e);
			v[i] &gt;&gt;= 1;
			if(i == vlen &amp;&amp; v[i] == 0) break;
			domul(e, e);
		}
	}
}

void dosub(LNUM *a, LNUM *b){
	LNUM *c, *d;
	int i, flag;
	if(a -&gt; msd &gt; b -&gt; msd) flag = 1;
	else if(a -&gt; msd &lt; b -&gt; msd) flag = 0;
	else {
		for(i = a -&gt; msd-1; i &gt;= 0 &amp;&amp; a -&gt; n[i] == b -&gt; n[i]; i--);
		if(i &lt; 0) {
			a -&gt; n[0] = 0;
			a -&gt; sign = 1;
			a -&gt; msd = 1;
			return;
		}
		flag = a -&gt; n[i] &gt; b -&gt; n[i] ? 1 : 0;
	}
	if(flag) c = a, d = b;
	else c = b, d = a;
	
	int max = c -&gt; msd;
	int cy, sum;
	int *tn = (int*)malloc(sizeof(int) * max);
	for(cy = i = 0; i &lt; max; ++i){
		if(i &lt; d -&gt; msd)
		  sum = c -&gt; n[i] - d -&gt; n[i] - cy;
		else
		  sum = c -&gt; n[i] - cy;
		if(sum &lt; 0) {
		  sum = sum + MYDIG;
		  cy = 1;
		}
		else cy = 0;
		tn[i] = sum;
	}
	for(i--; i &gt; 0 &amp;&amp; tn[i] == 0; --i);
	a -&gt; msd = i + 1;
	if(flag == 0)
		a -&gt; sign = c -&gt; sign;
	free(a -&gt; n);
	a -&gt; n = tn;
}

void docal(){
	LNUM*a = num + sp - 2;
	LNUM*b = num + sp - 1;
	char opcode = runops[--op];
	switch(opcode) {
	case &#39;+&#39;:
		if(a -&gt; sign == b -&gt; sign) doadd(a, b);
		else dosub(a, b);
		--sp;
		break;
	case &#39;-&#39;:
		b -&gt; sign *= -1;
		if(a -&gt; sign == b -&gt; sign) doadd(a, b);
		else dosub(a, b);
		--sp;
		break;
	case &#39;*&#39;:
		domul(a, b);
		--sp;
		break;
	case &#39;^&#39;:
		doexp(a, b);
		--sp;
		break;
	}
}
int checkop(){
	char flag = lastchar;
	char last;
	if(lastchar == 0 || lastchar == &#39;\n&#39; || lastchar == EOF) flag=&#39;$&#39;;
	else {
		char lastchar2 = getchar();
		if(lastchar == &#39;*&#39; &amp;&amp; lastchar2 == &#39;*&#39;){
			flag=&#39;^&#39;;
			lastchar = getchar();
		}
		else lastchar = lastchar2;
	}
	while(op &gt; 0) {
		last = runops[op-1];
		if(flag == &#39;+&#39; || flag == &#39;-&#39;) {
			docal();
			continue;
		}
		else if(flag == &#39;*&#39;) {
			if(last == &#39;^&#39; || last == &#39;*&#39;) {
				docal();
				continue;
			}
		}
		else if(flag == &#39;^&#39;)
			break;
		else{
			docal();
			continue;
		}
		break;
	}
	runops[op++] = flag;
	return flag == &#39;$&#39; ? 0 : 1;
}			
int checkexp(){
	for(;;){
		if(lastchar == EOF) return 1;
		if(&#39;0&#39; &lt;= lastchar &amp;&amp; lastchar &lt;= &#39;9&#39; || lastchar == &#39;-&#39; || lastchar == &#39;+&#39;) return 0;
		lastchar = getchar();
	}
}
void loadlnum(){
	int i;
	char buf[1004];
	char *p, *s;
	LNUM *a = num + sp;
	++sp;
	int mysign = 1;
	if(lastchar == &#39;-&#39;) {
		mysign = -1;
		lastchar = getchar();
	}
	else if(lastchar == &#39;+&#39;) {
		mysign = 1;
		lastchar = getchar();
	}
	for(s = buf; &#39;0&#39; &lt;= lastchar &amp;&amp; lastchar &lt;= &#39;9&#39;; ++s){
		*s = lastchar;
		lastchar = getchar();
	}
	char *t = buf;
	while(*t == &#39;0&#39;) t++;
	if(t == s) t--;
	a -&gt; n = (int*)malloc(sizeof(int) * ((s - t + 2) &gt;&gt; 1));
	for(i = 0, s--, p = t; s &gt;= p; s -= 2, ++i)
		a -&gt; n[i] = *s - &#39;0&#39; + (s - p - 1 &gt;= 0 ? (*(s-1) - &#39;0&#39;) * 10 : 0);
	if(i == 1 &amp;&amp; a -&gt; n[0] == 0) mysign = 1;
	a -&gt; sign = mysign;
	a -&gt; msd = i;
}

int main(void) {
	lastchar = getchar();
	int i;
	for(i = 0; ; ++i) {
		for(op = sp = 0;;) {
			loadlnum();
			if(checkop() == 0) break;
		}
		if(i)
			printf(&quot;\n&quot;);
		showans();
		if(checkexp() == 1) break;
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