<!DOCTYPE html>
<html>
<head>
<title>uva993</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva993</h1>
<pre class="prettyprint">
//uva993
#include &lt;cstdio&gt;
#include &lt;string&gt;
#include &lt;iostream&gt;

using namespace std;

string solve(int n) {
    string ans = &quot;&quot;;
    int i;

    while(n != 1) {
        for (i = 9; i &gt; 1; i--) {
            if (n % i == 0) {
                n /= i;
                ans = (char)(i + &#39;0&#39;) + ans;
                break;
            }
        }
        if (i == 1) return &quot;-1&quot;;
    }
    return ans;
}


int main() {
    int test_case, n;
    string ans;

    scanf(&quot;%d&quot;, &amp;test_case);

    while (test_case--) {
        scanf(&quot;%d&quot;, &amp;n);

        if (n &lt; 10) {
            printf(&quot;%d\n&quot;, n);
            continue;
        }
        cout &lt;&lt; solve(n) &lt;&lt; endl;
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