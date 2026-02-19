<!DOCTYPE html>
<html>
<head>
<title>uva11792</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11792</h1>
<pre class="prettyprint">
//uva11792
#include &lt;iostream&gt;
#include &lt;queue&gt;
#include &lt;vector&gt;

using namespace std;

int main() {

  int t;
  cin &gt;&gt; t;
  int n, m;
  vector&lt;int&gt; g[10005];
  int path[10005];
  while (t--) {
    cin &gt;&gt; n &gt;&gt; m;
    for (int i = 0; i &lt;= n; ++i) {
      g[i].clear();
      path[i] = 0;
    }
    int pre, next;
    for (int i = 0; i &lt; m; ++i) {
      cin &gt;&gt; pre;
      ++path[pre];
      while (cin &gt;&gt; next) {
        if (!next)
          break;
        g[pre].push_back(next);
        g[next].push_back(pre);
        pre = next;
        ++path[pre];
      }
    }

    int res = -1, mn = 1999999999;
    int dist[10005];
    int used[10005];
    int tmp = 0;
    queue&lt;int&gt; Q;
    for (int i = 1; i &lt;= n; ++i) {
      if (path[i] &gt; 1) {
        Q = queue&lt;int&gt;();
        for (int j = 0; j &lt;= n; ++j) {
          dist[j] = 1999999999;
          used[j] = 0;
        }
        dist[i] = 0;
        Q.push(i);
        int tn;

        while (!Q.empty()) {
          tn = Q.front();
          Q.pop();
          used[tn] = 0;
          for (int j = 0; j &lt; g[tn].size(); ++j) {
            if (dist[g[tn][j]] &gt; dist[tn] + 1) {
              dist[g[tn][j]] = dist[tn] + 1;
              if (!used[g[tn][j]]) {
                used[g[tn][j]] = 1;
                Q.push(g[tn][j]);
              }
            }
          }
        }

        tmp = 0;
        for (int j = 1; j &lt;= n; ++j) {
          if (path[j] &gt; 1)
            tmp += dist[j];
        }

        if (tmp &lt; mn) {
          mn = tmp;
          res = i;
        }
      }
    }
    cout &lt;&lt; &quot;Krochanska is in: &quot; &lt;&lt; res &lt;&lt; endl;
  }
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