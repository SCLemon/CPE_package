<!DOCTYPE html>
<html>
<head>
<title>uva11730</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11730</h1>
<pre class="prettyprint">
//uva11730
#include&lt;cstdio&gt;
#include&lt;iostream&gt;
#include&lt;algorithm&gt;
#include&lt;queue&gt;
#include&lt;string.h&gt;
using namespace std;
int prime[1001];
int bfs(int s, int t)
{
    int count[1001] = {};
    queue&lt;int&gt; q;
    q.push(s);

    while (!q.empty())
    {
        int now = q.front();
        q.pop();
        for (int p_idx = 0; prime[p_idx] &lt; now; p_idx++)
        {
            if (!(now%prime[p_idx]))
            {
                int temp = now + prime[p_idx];
                if (count[temp])
                    continue;

                if (temp == t)
                    return count[now] + 1;
                else if (temp &lt; t)
                {
                    count[temp] = count[now]+1;
                    q.push(temp);
                }
                else
                    break;
            }
        }
    }

    return -1;
}

int main(){

    int mark[1001];
    int tim=0,s,t;
    bool notPrime[1001] = { true, true };
    int i, j;
    for (i = 2; i &lt;= 32; i++)
        for (j = i + i; j &lt; 1001; j += i)
            notPrime[j] = true;
    int cp = 0;
    for (i = 2; i &lt; 1001; i++)
        if (!notPrime[i])
            prime[cp++] = i;
    int Case = 0;
    while (cin&gt;&gt;s&gt;&gt;t &amp;&amp; s&amp;&amp;t)
    {
        cout&lt;&lt;&quot;Case &quot;&lt;&lt;++Case&lt;&lt;&quot;: &quot;;
        if (s == t)
            cout&lt;&lt;&quot;0&quot;&lt;&lt;endl;
        else
            cout&lt;&lt;bfs(s, t)&lt;&lt;endl;
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