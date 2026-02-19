<!DOCTYPE html>
<html>
<head>
<title>uva11541</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11541</h1>
<pre class="prettyprint">
//uva11541
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
using namespace std;


int main() {

    int n, total, cnt = 0;
    char alpha;

    while (cin &gt;&gt; n) {
        getchar();
        for(int i = 1; i &lt;= n; i++) {
            cout &lt;&lt; &quot;Case &quot; &lt;&lt; i &lt;&lt; &quot;: &quot;;
            while((alpha=getchar()) != &#39;\n&#39;) {
                cin &gt;&gt; total;
                for(int i = 0; i &lt; total; i++){
                    cout &lt;&lt; alpha;
                }
            }
            cout &lt;&lt; endl;
        }
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