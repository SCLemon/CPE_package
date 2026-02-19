<!DOCTYPE html>
<html>
<head>
<title>uva10222</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10222</h1>
<pre class="prettyprint">
//uva10222
#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main() {
    string dic = &quot;`1234567890-=qwertyuiop[]\\asdfghjkl;&#39;zxcvbnm,./&quot;;

    int N;
    cin &gt;&gt; N;
    cin.ignore();
    while (N--) {
        string words;
        getline(cin, words);
        for (int i = 0; i &lt; words.size(); ++i) {
            if (&#39;A&#39; &lt;= words[i] &amp;&amp; words[i] &lt;= &#39;Z&#39;)
                words[i] += 32; // to lower case
            int pos = dic.find(words[i]);
            if (pos != -1)
                words[i] = dic[pos - 2];
        }
        cout &lt;&lt; words &lt;&lt; endl;
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