<!DOCTYPE html>
<html>
<head>
<title>uva725</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva725</h1>
<pre class="prettyprint">
//uva725
#include &lt;iostream&gt;
#include &lt;cstdlib&gt;
#include &lt;iomanip&gt;
using namespace std;

bool isnonrepeat(int a, int b){
    int n[10];
    if (a &lt; 10000 &amp;&amp; b &lt; 10000)return false;
    for(int i = 0; i &lt; 10; ++i)n[i] = 0;
    if (a &lt; 10000 || b &lt; 10000)n[0] = 1;
    while (a &gt; 0){
        if (n[a % 10] == 1)return false;
        else n[a % 10] = 1;
        a /= 10;
    }
    while (b &gt; 0){
        if (n[b % 10] == 1)return false;
        else n[b % 10] = 1;
        b /= 10;
    }
    return true;
}

int main(){
    int n;
    int a;
    bool ans;
    bool start = true;

    while (cin &gt;&gt; n){
        if (n == 0)break;
        if (!start)cout &lt;&lt; endl;
        start = false;
        ans = false;
        for (int i = 1234; i &lt; 49876; ++i){
            a = i * n;
            if (a &gt; 99999)continue;
            else {
                if (isnonrepeat(a, i)){
                    ans = true;
                    cout &lt;&lt; setw(5) &lt;&lt; setfill(&#39;0&#39;) &lt;&lt; a;
                    cout &lt;&lt; &quot; / &quot;;
                    cout &lt;&lt; setw(5) &lt;&lt; setfill(&#39;0&#39;) &lt;&lt; i;
                    cout &lt;&lt; &quot; = &quot; &lt;&lt; n &lt;&lt; endl;
                }
            }
        }
        if (!ans){
            cout &lt;&lt; &quot;There are no solutions for &quot; &lt;&lt; n &lt;&lt; &quot;.&quot; &lt;&lt; endl;
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