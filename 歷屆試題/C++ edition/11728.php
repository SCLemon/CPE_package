<!DOCTYPE html>
<html>
<head>
<title>uva11728</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11728</h1>
<pre class="prettyprint">
//uva11728
#include &lt;cmath&gt;
#include &lt;iostream&gt;

using namespace std;

int main() {
  // brute force
  // enumerate all the situations
  int table[1005];
  for (int i = 0; i &lt; 1005; ++i)
    table[i] = -1;
  for (int i = 1; i &lt;= 1000; ++i) {
    int tmp = 0;
    for (int j = 1; j &lt;= sqrt(i); ++j) {
      if (i % j == 0) {
        if (i != j * j)
          tmp += i / j;
        tmp += j;
      }
    }
    if (tmp &lt;= 1000)
      table[tmp] = i;
  }

  int n;
  int cnt = 1;
  while (cin &gt;&gt; n &amp;&amp; n) {
    cout &lt;&lt; &quot;Case &quot; &lt;&lt; cnt &lt;&lt; &quot;: &quot; &lt;&lt; table[n] &lt;&lt; endl;
    ++cnt;
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