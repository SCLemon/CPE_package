<!DOCTYPE html>
<html>
<head>
<title>uva13242</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva13242</h1>
<pre class="prettyprint">
//uva13242
#include &lt;cmath&gt;
#include &lt;iostream&gt;
#include &lt;limits&gt;
#include &lt;vector&gt;
using namespace std;

int main() {
    int kase;
    cin &gt;&gt; kase;
    while (kase--) {
        int pool, target;
        cin &gt;&gt; pool &gt;&gt; target;
        int n;
        cin &gt;&gt; n;
        vector&lt;pair&lt;int, int&gt;&gt; v(n);
        for (int i = 0; i &lt; n; i++) {
            cin &gt;&gt; v[i].first &gt;&gt; v[i].second;
        }

        vector&lt;int&gt; preVol(n + 1, 0);
        vector&lt;long long&gt; preTep(n + 1, 0);
        for (int i = 0; i &lt; n; i++) {
            preVol[i + 1] = preVol[i] + v[i].first;
            preTep[i + 1] = preTep[i] + (long long)v[i].first * v[i].second;
        }

        int bestI = -1, bestJ = -1;
        long long bestDiff = 0;
        int bestVol = 0;
        bool found = false;

        for (int i = 0; i &lt; n; i++) {
            for (int j = i; j &lt; n; j++) {
                int volume = preVol[j + 1] - preVol[i];
                if (volume &gt; pool)
                    break;
                if (volume &lt; (pool + 1) / 2)
                    continue;

                long long hotSum = preTep[j + 1] - preTep[i];
                long long targetSum = (long long)target * volume;
                long long diff = abs(hotSum - targetSum);
                if (diff &gt; 5 * volume)
                    continue;
                if (!found) {
                    bestI = i;
                    bestJ = j;
                    bestDiff = diff;
                    bestVol = volume;
                    found = true;
                } else {
                    if (diff * bestVol &lt; bestDiff * volume) {
                        bestI = i;
                        bestJ = j;
                        bestDiff = diff;
                        bestVol = volume;
                    } else if (diff * bestVol == bestDiff * volume) {
                        if (i &lt; bestI || (i == bestI &amp;&amp; j &lt; bestJ)) {
                            bestI = i;
                            bestJ = j;
                            bestDiff = diff;
                            bestVol = volume;
                        }
                    }
                }
            }
        }
        
        if (found)
            cout &lt;&lt; bestI &lt;&lt; &quot; &quot; &lt;&lt; bestJ &lt;&lt; &quot;\n&quot;;
        else
            cout &lt;&lt; &quot;Not possible&quot; &lt;&lt; &quot;\n&quot;;
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