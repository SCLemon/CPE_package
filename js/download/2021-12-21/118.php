<!DOCTYPE html>
<html>
<head>
<title>uva118</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva118</h1>
<pre class="prettyprint">
//uva118
#include &lt;iostream&gt;

using namespace std;

int main() {
  bool scent[55][55] = {0};
  int bound_x, bound_y;
  int init_x, init_y;
  char init_ori;
  int curr_x, curr_y, curr_ori = 0;
  bool if_lost = false;
  string ins;

  cin &gt;&gt; bound_x &gt;&gt; bound_y;
  while (cin &gt;&gt; init_x &gt;&gt; init_y &gt;&gt; init_ori) {
    cin &gt;&gt; ins;
    curr_x = init_x;
    curr_y = init_y;
    if_lost = false;
    switch (init_ori) {
    case &#39;N&#39;:
      curr_ori = 0;
      break;
    case &#39;E&#39;:
      curr_ori = 1;
      break;
    case &#39;S&#39;:
      curr_ori = 2;
      break;
    case &#39;W&#39;:
      curr_ori = 3;
      break;
    }

    for (auto i : ins) {
      int next_x = curr_x, next_y = curr_y;

      if (i == &#39;L&#39;) {
        curr_ori = (curr_ori + 3) % 4;
      } else if (i == &#39;R&#39;) {
        curr_ori = (curr_ori + 1) % 4;
      } else if (i == &#39;F&#39;) {
        switch (curr_ori) {
        case 0:
          next_y = curr_y + 1;
          break;
        case 1:
          next_x = curr_x + 1;
          break;
        case 2:
          next_y = curr_y - 1;
          break;
        case 3:
          next_x = curr_x - 1;
          break;
        }
        if (next_x &lt; 0 || next_x &gt; bound_x || next_y &lt; 0 || next_y &gt; bound_y) {
          if (scent[curr_x][curr_y])
            continue;
          else {
            if_lost = true;
            scent[curr_x][curr_y] = true;
            break;
          }
        }
        curr_x = next_x;
        curr_y = next_y;
      }
    }
    cout &lt;&lt; curr_x &lt;&lt; &quot; &quot; &lt;&lt; curr_y &lt;&lt; &quot; &quot;;
    switch (curr_ori) {
    case 0:
      cout &lt;&lt; &quot;N&quot;;
      break;
    case 1:
      cout &lt;&lt; &quot;E&quot;;
      break;
    case 2:
      cout &lt;&lt; &quot;S&quot;;
      break;
    case 3:
      cout &lt;&lt; &quot;W&quot;;
      break;
    }
    if (if_lost)
      cout &lt;&lt; &quot; LOST&quot;;
    cout &lt;&lt; endl;
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