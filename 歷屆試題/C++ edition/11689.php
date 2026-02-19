<!DOCTYPE html>
<html>
<head>
<title>uva11689</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11689</h1>
<pre class="prettyprint">
//uva11689
#include&lt;iostream&gt;

using namespace std;

int main(){
    int t;
    int e, f, c, r;
    cin &gt;&gt; t;
    for (int i = t; i &gt; 0; --i){
        cin &gt;&gt; e &gt;&gt; f &gt;&gt; c;
        e += f;
        r = 0;
        while (e &gt;= c) {
            r += e / c;
            e = e / c + e % c;
        }
        cout &lt;&lt; r &lt;&lt;endl;
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