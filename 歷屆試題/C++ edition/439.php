<!DOCTYPE html>
<html>
<head>
<title>uva439</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva439</h1>
<pre class="prettyprint">
//uva 439
#include &lt;cstdio&gt;
#include &lt;cstdlib&gt;
#include &lt;iostream&gt;
#include &lt;queue&gt;

using namespace std;

int mov[8][2] = {{-1,-2}, {-2,-1}, {-2,1}, {-1,2}, {1,2}, {2,1}, {2,-1}, {1,-2}};

class pos{
    public:
    int r, c, cnt;
    pos() {}
    pos(int _r, int _c, int _cnt) : r(_r), c(_c), cnt(_cnt) {}
    bool operator==(const pos p) {
		return r==p.r &amp;&amp; c==p.c;
	}
};

bool legal(pos p) {
    return (p.c &gt;= 1 &amp;&amp; p.c &lt;= 8 &amp;&amp; p.r &gt;= 1 &amp;&amp; p.r &lt;= 8);
}



int main() {
	
    char s[5], t[5];
    queue&lt;pos&gt; q;
    pos cur, goal;
    int ans;
	
    while (scanf(&quot;%s %s&quot;, &amp;s, &amp;t) == 2) {
        goal = pos(t[1] - &#39;0&#39;, t[0] - &#39;a&#39; + 1, 0);
        while (!q.empty())
            q.pop();
        q.push(pos(s[1] - &#39;0&#39;, s[0] - &#39;a&#39; + 1, 0));
        while (1) {
            cur = q.front();
	    q.pop();
            if (cur == goal) {
                ans = cur.cnt;
                break;
            }

            for (int i = 0 ; i &lt; 8 ; i++) {
                pos tmp = pos(cur.r + mov[i][0], cur.c + mov[i][1], cur.cnt + 1);
                if (legal(tmp)) {
                    q.push(tmp);
                }
            }
        }

        printf(&quot;To get from %s to %s takes %d knight moves.\n&quot;, s, t, ans);
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