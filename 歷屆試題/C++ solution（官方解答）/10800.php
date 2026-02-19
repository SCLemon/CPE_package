<!DOCTYPE html>
<html>
<head>
<title>uva10800</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10800</h1>
<pre class="prettyprint">
//uva10800
#include &lt;iostream&gt;
#include &lt;string&gt;

using namespace std;

int main() {
  char table[106][55];

  int now, up, down, len;
  int N, cnt = 0;
  cin &gt;&gt; N;
  string s;

  while (N--) {
    cin &gt;&gt; s;
    now = up = down = 53;
    len = s.length();
    for (int i = 0; i &lt; 106; ++i) {
      for (int j = 0; j &lt; 54; ++j)
        table[i][j] = &#39; &#39;;
      table[i][54] = &#39;\0&#39;;
    }

    for (int i = 0; i &lt; len; ++i) {
      switch (s[i]) {
      case &#39;R&#39;:
        if (i &amp;&amp; s[i - 1] == &#39;R&#39;)
          ++now;
        table[now][i] = &#39;/&#39;;
        break;
      case &#39;F&#39;:
        if (i &amp;&amp; s[i - 1] != &#39;R&#39;)
          --now;
        table[now][i] = &#39;\\&#39;;
        break;
      case &#39;C&#39;:
        if (i &amp;&amp; s[i - 1] == &#39;R&#39;)
          ++now;
        table[now][i] = &#39;_&#39;;
        break;
      }
      if (now &gt; up)
        up = now;
      if (now &lt; down)
        down = now;
    }
    //消後面空白
    for (int i = up; i &gt;= down; --i) {
      for (int j = len; j &gt; 0; --j) {
        if (table[i][j] == &#39; &#39;)
          table[i][j] = &#39;\0&#39;;
        else
          break;
      }
    }

    cout &lt;&lt; &quot;Case #&quot; &lt;&lt; ++cnt &lt;&lt; &quot;:&quot; &lt;&lt; endl;
    for (int i = up; i &gt;= down; --i) {
      cout &lt;&lt; &quot;| &quot;;
      cout &lt;&lt; table[i] &lt;&lt; endl;
    }
    cout &lt;&lt; &#39;+&#39;;
    for (int i = 0; i &lt; len + 2; ++i)
      cout &lt;&lt; &#39;-&#39;;
    cout &lt;&lt; endl &lt;&lt; endl;
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