<!DOCTYPE html>
<html>
<head>
<title>uva12319</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12319</h1>
<pre class="prettyprint">
//uva12319
#include&lt;iostream&gt;

using namespace std;

int v[105][105];
int fv[105][105];

int main(){
    
    int n;
    int A, B;
    int c, temp = &#39;t&#39;;
    int f;
    int max;
    cin &gt;&gt; n;
    while (n != 0){
        for (int i = 0; i &lt; 105; ++i)
            for (int j = 0; j &lt; 105; ++j)
                v[i][j] = fv[i][j] = 65535;
        while(getchar() != &#39;\n&#39;);
        for (int i = 0; i &lt; 103; ++i)
            v[i][i]=fv[i][i]=1;
        for (int i = 1; i &lt;= n; ++i){
            cin &gt;&gt; c;
            temp = cin.get();
            while(temp != &#39;\n&#39;){
                cin &gt;&gt; temp;
                v[c][temp]=1;
                temp = cin.get();
            }
        }
        for (int i = 1; i &lt;= n; ++i){
            cin &gt;&gt; c;
            temp = cin.get();
            while(temp != &#39;\n&#39;){
                cin &gt;&gt; temp;
                fv[c][temp]=1;
                temp = cin.get();
            }
        }
        cin &gt;&gt; A;
        cin &gt;&gt; B;
        for (int k = 1; k &lt;= n; ++k)
            for (int i = 1; i &lt;= n; ++i)
                for (int j = 1; j &lt;= n; ++j){
                    if (v[i][j] &gt; v[i][k] + v[k][j])
                        v[i][j] = v[i][k] + v[k][j];
                    if (fv[i][j] &gt; fv[i][k] + fv[k][j])
                        fv[i][j] = fv[i][k] + fv[k][j];
                }
        f = 1;
        max = 0;
        for (int i = 1; i &lt;= n; ++i)
            for (int j = 1; j &lt;= n; ++j){
                if (fv[i][j] &gt; v[i][j] * A + B)
                    f = 0;
                if (max &lt; v[i][j] &amp;&amp; v[i][j] != 65535)
                    max = v[i][j];
            }
        if (f)
            cout &lt;&lt; &quot;Yes&quot; &lt;&lt; &#39; &#39; &lt;&lt; max &lt;&lt; endl;
        else
            cout &lt;&lt; &quot;No&quot; &lt;&lt; &#39; &#39; &lt;&lt; max &lt;&lt; endl;
        cin &gt;&gt; n;
    }
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->