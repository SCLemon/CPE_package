<!DOCTYPE html>
<html>
<head>
<title>uva12650</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12650</h1>
<pre class="prettyprint">
//uva12650
#include &lt;iostream&gt;
using namespace std;
int main(){
    int N, R, tmp;
    while (cin &gt;&gt; N &gt;&gt; R){
        bool r[10001]= {0};
        for (int i = 0; i &lt; R; i++){
            cin &gt;&gt; tmp;
            r[tmp] = true;
        }

        if (N == R)
            cout &lt;&lt; &quot;*&quot; &lt;&lt; endl;
        else {
            for (int i = 1; i &lt;= N; i++){
                if (!r[i])
                    cout &lt;&lt; i &lt;&lt; &quot; &quot;;
            }
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