<!DOCTYPE html>
<html>
<head>
<title>uva12911</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12911</h1>
<pre class="prettyprint">
//uva12911
#include &lt;iostream&gt;
#include &lt;unordered_map&gt;

using namespace std;

int main() {
  int N, T;
  while (cin &gt;&gt; N &gt;&gt; T) {
    long long int num[45];
    for (int i = 0; i &lt; N; ++i)
      cin &gt;&gt; num[i];
    // divide into two subset because enumerate the 2^40 subset is impossible
    long long int lNum = N / 2;
    if (lNum == 0)
      lNum = 1;
    long long int rNum = N - lNum;
    unordered_map&lt;long long int, int&gt; mL, mR; // sum maps to number of subsets
    // enumerate 1~2^(left)
    for (int i = 1; i &lt; (1 &lt;&lt; lNum); ++i) {
      long long int sum = 0;
      for (int j = 0; j &lt; lNum; ++j) {
        if (i &amp; (1 &lt;&lt; j))
          sum += num[j];
      }
      ++mL[sum];
    }
    // enumerate 1~2^(right)
    for (int i = 1; i &lt; (1 &lt;&lt; rNum); ++i) {
      long long int sum = 0;
      for (int j = 0; j &lt; rNum; ++j) {
        if (i &amp; (1 &lt;&lt; j))
          sum += num[lNum + j];
      }
      ++mR[sum];
    }
    long long int cnt = 0;
    for (auto itr : mL) {
      if (mR.find(T - itr.first) != mR.end())
        cnt += (long long)itr.second * mR[T - itr.first];
    }
    cout &lt;&lt; cnt + mL[T] + mR[T] &lt;&lt; endl;
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