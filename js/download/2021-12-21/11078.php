<!DOCTYPE html>
<html>
<head>
<title>uva11078</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11078</h1>
<pre class="prettyprint">
//uva11078
#include &lt;iostream&gt;

using namespace std;

int main() {
  int i, times, grade_num, grade, max_grade, ans;
  cin &gt;&gt; times;
  while (times &gt; 0) {
    cin &gt;&gt; grade_num;
    cin &gt;&gt; max_grade;
    ans = -1000000;
    for (i = 1; i &lt; grade_num; i++) {
      cin &gt;&gt; grade;
      if (max_grade - grade &gt; ans)
        ans = max_grade - grade;
      if (max_grade &lt; grade)
        max_grade = grade;
    }
    cout &lt;&lt; ans &lt;&lt; endl;
    times--;
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