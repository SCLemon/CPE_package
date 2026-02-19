<!DOCTYPE html>
<html>
<head>
<title>uva1260</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1260</h1>
<pre class="prettyprint">
//uva1260
#include &lt;iostream&gt;

using namespace std;

int main() {
  int k;
  cin &gt;&gt; k;
  while (k--) {
    int n;
    cin &gt;&gt; n;
    int A[1005] = {0};
    int ans = 0;

    for (int i = 0; i &lt; n; ++i) {
      cin &gt;&gt; A[i];
      for (int j = 0; j &lt; i; ++j) {
        if (A[j] &lt;= A[i]) {
          ++ans;
        }
      }
    }
    cout &lt;&lt; ans &lt;&lt; endl;
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