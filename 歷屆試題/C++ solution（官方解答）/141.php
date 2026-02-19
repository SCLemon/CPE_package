<!DOCTYPE html>
<html>
<head>
<title>uva141</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva141</h1>
<pre class="prettyprint">
//uva141
#include &lt;stdio.h&gt;
#include &lt;iostream&gt;
#include &lt;map&gt;

using namespace std;

void rotate(int x[][50], int n) {
   int y[50][50], i, j;
   for(i = 0; i &lt; n; i++)
       for(j = 0; j &lt; n; j++)
           y[j][n - i - 1] = x[i][j];
	   
   for(i = 0; i &lt; n; i++)
       for(j = 0; j &lt; n; j++)
           x[i][j] = y[i][j];
}
int main() {
   int n;
   while(scanf(&quot;%d&quot;, &amp;n), n) {
       map&lt;string, int&gt; r;
       int m = 2 * n, board[50][50] = {}, x, y;
       int flag = -1, move;
       char cmd[3];
       for(int i = 0; i &lt; m; i++) {
           scanf(&quot;%d %d %s&quot;, &amp;x, &amp;y, cmd);
           if(flag != -1)  continue;
           x--, y--;
           if(cmd[0] == &#39;+&#39;)
               board[x][y] = 1;
           else    
			   board[x][y] = 0;
           string s = &quot;&quot;;
           for(int j = 0; j &lt; n; j++)
               for(int k = 0; k &lt; n; k++)
                   s += (board[j][k] + &#39;0&#39;);
           if(r[s] == 1) {
               flag = i &amp; 1;
               move = i;
               continue;
           }
           for(int rr = 0; rr &lt; 4; rr++) {
               string s = &quot;&quot;;
               for(int j = 0; j &lt; n; j++)
                   for(int k = 0; k &lt; n; k++)
                       s += (board[j][k] + &#39;0&#39;);
               r[s] = 1;
               rotate(board, n);
           }
       }
       if(flag == -1)
           puts(&quot;Draw&quot;);
       else
           printf(&quot;Player %d wins on move %d\n&quot;, !flag + 1, move + 1);
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