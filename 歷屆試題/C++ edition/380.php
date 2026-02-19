<!DOCTYPE html>
<html>
<head>
<title>uva380</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva380</h1>
<pre class="prettyprint">
//uva380
#include &lt;cstdio&gt;
#include &lt;cstring&gt;
#include &lt;iostream&gt;
#include &lt;vector&gt;

using namespace std;

class ele {
public:
    int time, target, end;
    ele() : time(0), target(0), end(0) {}
    ele(int time, int duration, int target) {
        this-&gt;time = time;
        this-&gt;target = target;
        this-&gt;end = time + duration;
    }
};
vector&lt;ele&gt; phone[10000];
bool isCalled[10000];

int TryCall(int time, int source) {
    isCalled[source] = true;
    for (int i = 0; i &lt; phone[source].size(); ++i) {
        if (phone[source][i].time &lt;= time &amp;&amp; time &lt;= phone[source][i].end) {
            if (isCalled[phone[source][i].target])
                return 9999;
            return TryCall(time, phone[source][i].target);
        }
    }
    return source;
}

int main() {
    cout &lt;&lt; &quot;CALL FORWARDING OUTPUT&quot; &lt;&lt; endl;
    int N;
    int cas = 0;
    cin &gt;&gt; N;

    while (N--) {
        cout &lt;&lt; &quot;SYSTEM &quot; &lt;&lt; ++cas &lt;&lt; endl;
        int source, time, duration, target;
        for (int i = 0; i &lt; 10000; ++i)
            phone[i].clear();

        while (cin &gt;&gt; source &amp;&amp; source) {
            cin &gt;&gt; time &gt;&gt; duration &gt;&gt; target;
            phone[source].push_back(ele(time, duration, target));
        }
        while (cin &gt;&gt; time &amp;&amp; time != 9000) {
            cin &gt;&gt; source;
            memset(isCalled, false, sizeof(isCalled));
            printf(&quot;AT %04d CALL TO %04d RINGS %04d\n&quot;, time, source, TryCall(time, source));
        }
    }

    cout &lt;&lt; &quot;END OF OUTPUT&quot; &lt;&lt; endl;
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