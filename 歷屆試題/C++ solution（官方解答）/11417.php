<!DOCTYPE html>
<html>
<head>
<title>uva11417</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11417</h1>
<pre class="prettyprint">
//uva11417
//uva11417
#include &lt;iostream&gt;
using namespace std;
int gcd(int x, int y){
	int r = 0;

    while (y != 0) {
        r = x % y;
        x = y;
        y = r;
    }

    return x;
}
int main() {
   int ans[507] = {0}, n;
   for (int i = 1; i &lt; 507; i++) {
      ans[i] = ans[i - 1];
      for (int j = 1; j &lt; i; j++)
        ans[i]+= gcd(i, j);
   }
   while (cin &gt;&gt; n) {
       if (n == 0)
          break;
       else
          cout &lt;&lt; ans[n] &lt;&lt; endl;
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