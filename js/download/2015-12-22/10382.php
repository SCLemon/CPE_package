<!DOCTYPE html>
<html>
<head>
<title>uva10382</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>ç¯„ä¾‹ç¨‹å¼ç¢¼ uva10382</h1>
<pre class="prettyprint">
//uva10382
#include&lt;stdio.h&gt;
#include&lt;string.h&gt;
#include&lt;algorithm&gt;
#include&lt;math.h&gt;

using namespace std;

struct segment {
	double leftEnd, rightEnd;
};

int cmp(segment a, segment b) {
	return a.leftEnd &lt; b.leftEnd;
}

segment sprinter[10005];
int main() {
	int n, l, w;  // Åx¤ô¾¹¼Æ¥Ø n ,¯ó¦aªø¡B¼e: l,w
	while(scanf(&quot;%d %d %d&quot;, &amp;n, &amp;l, &amp;w) == 3) {
		double sp, sr;      // Åx¤ô¾¹ªº¦ì¸m¡B©MÅx¤ô¥b®|
		int esNum = 0;        
		for(int i = 0; i &lt; n; i++) {
			scanf(&quot;%lf %lf&quot;, &amp;sp, &amp;sr);   //Åª¤JÅx¤ô¾¹ªº¦ì¸m©MÅx¤ô¥b®|
			if(2 * sr &lt;= w)
				continue;                 //¦pªGÅx¤ôª½®|¤p©ó¯ó¦a¼e«×¡B¦¹Åx¤ô¾¹¤£­p¦]ÂĞ»\ªø«×¬°¹s
			double eLength = sqrt(sr * sr - w * w / 4.0);
			sprinter[esNum].leftEnd = sp - eLength;
			sprinter[esNum++].rightEnd = sp + eLength; //Åx¤ô¾¹©ÒÂĞ»\ªº½u¬q¤§¥ª¡B¥kºİÂI
		}
		sort(sprinter, sprinter + esNum, cmp);
		int ans = 0, flag = 0;
		if(sprinter[0].leftEnd &gt; 0) {
			printf(&quot;-1\n&quot;);    //¥ªÃä¥¼¯à²[»\¡BµL¸Ñ,¿é¥X-1
			continue;
		}
		double coveredLeftEnd = 0, coveredRightEnd = 0;
		int sl = 0;
		while(coveredLeftEnd &lt; l) {    //¤w²[»\ªº¥ªºİ­Y¤´¤p©ó¯ó¦aªø«×«h¨Ì³g°ıªk¥Ñ¥NªíÅx¤ô¾¹ªº°}¦C¥Ñ¥ª¨ì¥k¿ï¾Ü¯à±N¥ªºİÂĞ»\³Ì¦hªºÅx¤ô¾¹¨Ã§ó·s¤w²[»\ªº¥ª¡B¥kºİ
			for(int i = sl; i &lt; esNum; i++) {
				if(sprinter[i].leftEnd &lt;= coveredLeftEnd &amp;&amp; sprinter[i].rightEnd &gt; coveredRightEnd) {
					coveredRightEnd = sprinter[i].rightEnd;
					sl = i;
				}
			}
			if(coveredLeftEnd == coveredRightEnd) {
				flag = 1;
				break;
			}
			coveredLeftEnd = coveredRightEnd;
			ans++;
		}
		if(!flag)
			printf(&quot;%d\n&quot;, ans);
		else
			printf(&quot;-1\n&quot;);
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