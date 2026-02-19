<!DOCTYPE html>
<html>
<head>
<title>uva1583</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1583</h1>
<pre class="prettyprint">
//uva1583
#include&lt;stdio.h&gt;
#include&lt;string.h&gt;
#include&lt;iostream&gt;
#define maxn 100010
using namespace std;

int ans[maxn];

int main (){
    int x, t;
    memset(ans, 0, sizeof(ans));
    for (int i = 1; i &lt; maxn; i++){
        x = i;
        t = i;
        while (x &gt; 0){
            t += x%10;
            x /= 10;
        }
        if (i &lt; ans[t] || ans[t] == 0)
            ans[t] = i;
    }
    int in, input;
    cin &gt;&gt; in;
    while (in--) {
        cin &gt;&gt; input;
        cout &lt;&lt; ans[input] &lt;&lt; endl;
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