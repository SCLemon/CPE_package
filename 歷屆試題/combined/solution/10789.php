<!DOCTYPE html>
<html>
<head>
<title>uva10789</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10789</h1>
<pre class="prettyprint">
//uva10789
#include &lt;iostream&gt;
#include &lt;set&gt;
#include &lt;vector&gt;

using namespace std;

void mkprime(vector&lt;bool&gt;&amp; prime) {
    prime[0] = false;
    prime[1] = false;

    for (int i = 2; i &lt; 2001; i++) {
        if (prime[i]) {
            for (int j = i + i; j &lt; 2001; j += i) {
                prime[j] = false;
            }
        }
    }
}

int main() {
    int T = 0;
    vector&lt;bool&gt; prime(2001, true);

    mkprime(prime);

    cin &gt;&gt; T;
    for (int i = 0; i &lt; T; i++) {
        string input = &quot;&quot;;
        set&lt;char&gt; output;
        vector&lt;int&gt; count(&#39;z&#39; + 1, 0);

        cin &gt;&gt; input;
        for (auto c : input) {
            count[c]++;
        }
        for (int j = 0; j &lt; count.size(); j++) {
            if (prime[count[j]]) {
                output.insert(j);
            }
        }
        cout &lt;&lt; &quot;Case &quot; &lt;&lt; i + 1 &lt;&lt; &quot;: &quot;;
        if (output.empty()) {
            cout &lt;&lt; &quot;empty&quot; &lt;&lt; endl;
        } else {
            for (auto j : output) cout &lt;&lt; j;
            cout &lt;&lt; endl;
        }
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