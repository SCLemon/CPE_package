<!DOCTYPE html>
<html>
<head>
<title>uva437</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva437</h1>
<pre class="prettyprint">
//uva437
#include &lt;cstdio&gt;
using namespace std;
int main()
{
struct {
    int x, y, z;
} a[200], temp;
int n, m;
int x, y, z;
int Case = 0;

scanf(&quot;%d&quot;, &amp;n);
while (n != 0 ) {
   m=0;
   for (int k=0; k &lt; n; k++) {
	  scanf(&quot;%d %d %d&quot;, &amp;x, &amp;y, &amp;z);
	  a[m++] = {x, y, z};  // 將六種可能的x,y,z均存入
	  a[m++] = {x, z, y};
	  a[m++] = {y, x, z};
	  a[m++] = {y, z, x};
	  a[m++] = {z, x, y};
	  a[m++] = {z, y, x};
   }
	for (int i=0; i &lt; m-1; i++)  // bubble sort, x 由小而大
	   for (int j=0; j &lt; m-1; j++) //資料量少，不設終止條件
		  if (a[j].x &gt; a[j+1].x) {
			 temp=a[j]; a[j]=a[j+1]; a[j+1]=temp; //swap
		  }

	int height[200]; //累積的高度
	int maxH = 0;
	for (int i=0; i &lt; m; i++) {
		height[i]=a[i].z;   // 每一個至少有自己的高度
		for (int j=0; j &lt; i; j++) // 嘗試每一個j
			if ((a[i].x &gt; a[j].x) &amp;&amp; (a[i].y &gt; a[j].y)) // i 可以放在j之下
                 if (height[i] &lt; height[j] + a[i].z)
					 height[i]=height[j]+a[i].z; // 更新高度
		if (maxH &lt; height[i])
			maxH=height[i];   //更新整體高度
	}
	Case++;
    printf(&quot;Case %d: maximum height = %d\n&quot;, Case, maxH);

    scanf(&quot;%d&quot;, &amp;n);
}
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