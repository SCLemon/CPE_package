<!DOCTYPE html>
<html>
<head>
<title>uva11360</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11360</h1>
<pre class="prettyprint">
//uva11360
#include &lt;iostream&gt;
#include &lt;string&gt;

using namespace std;

int main() {
    int matrix[11][11];
    string cmd;
    int c, n, t, a, b;

    cin &gt;&gt; c;

    for (int i = 1; i &lt;= c; ++i) {
        cin &gt;&gt; n;
        while (getchar() != &#39;\n&#39;)
            ;
        for (int j = 0; j &lt; n; ++j) {
            for (int k = 0; k &lt; n; ++k) {
                matrix[j][k] = getchar() - &#39;0&#39;;
            }
            while (getchar() != &#39;\n&#39;)
                ;
        }
        int temp;
        cin &gt;&gt; t;
        for (int j = 0; j &lt; t; ++j) {
            cin &gt;&gt; cmd;
            if (cmd == &quot;row&quot;) {
                cin &gt;&gt; a &gt;&gt; b;
                --a;
                --b;
                for (int k = 0; k &lt; n; ++k) {
                    temp = matrix[a][k];
                    matrix[a][k] = matrix[b][k];
                    matrix[b][k] = temp;
                }
            } else if (cmd == &quot;col&quot;) {
                cin &gt;&gt; a &gt;&gt; b;
                --a;
                --b;
                for (int k = 0; k &lt; n; ++k) {
                    temp = matrix[k][a];
                    matrix[k][a] = matrix[k][b];
                    matrix[k][b] = temp;
                }

            } else if (cmd == &quot;inc&quot;) {
                for (int k = 0; k &lt; n; ++k) {
                    for (int l = 0; l &lt; n; ++l) {
                        ++matrix[k][l];
                        matrix[k][l] %= 10;
                    }
                }
            } else if (cmd == &quot;dec&quot;) {
                for (int k = 0; k &lt; n; ++k) {
                    for (int l = 0; l &lt; n; ++l) {
                        --matrix[k][l];
                        if (matrix[k][l] == -1) matrix[k][l] = 9;
                    }
                }
            } else if (cmd == &quot;transpose&quot;) {
                for (int k = 0; k &lt; n; ++k) {
                    for (int l = 0; l &lt; k; ++l) {
                        temp = matrix[k][l];
                        matrix[k][l] = matrix[l][k];
                        matrix[l][k] = temp;
                    }
                }
            }
        }
        cout &lt;&lt; &quot;Case #&quot; &lt;&lt; i &lt;&lt; endl;
        for (int k = 0; k &lt; n; ++k) {
            for (int l = 0; l &lt; n; ++l) {
                cout &lt;&lt; matrix[k][l];
            }
            cout &lt;&lt; endl;
        }
        cout &lt;&lt; endl;
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