<!DOCTYPE html>
<html>
<head>
<title>uva11332</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11332</h1>
<pre class="prettyprint">
//uva11332
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

int main() {
  int a = 0;

  while (cin &gt;&gt; a &amp;&amp; a) {
    vector&lt;int&gt; v;

    while (a / 10 != 0) {
      v.push_back(a % 10);
      a /= 10;

      if (a / 10 == 0) {
        for (int i = 0; i &lt; v.size(); i++) {
          a += v[i];
        }
        v.clear();
      }
    }
    cout &lt;&lt; a &lt;&lt; endl;
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