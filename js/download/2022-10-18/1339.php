<!DOCTYPE html>
<html>
<head>
<title>uva1339</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1339</h1>
<pre class="prettyprint">
//uva1339
#include &lt;iostream&gt;
#include &lt;string&gt;

using namespace std;
 
int a[26], b[26], n[105], m[105], l;
string s1, s2;
 
int main() {
    while (cin &gt;&gt; s1 &gt;&gt; s2){
        l = s1.length();
        for (int i = 0; i &lt; 26; i++){
            a[i] = 0;
            b[i] = 0;
        }
        for (int i = 0; i &lt; l; i++){
            a[s1[i]-&#39;A&#39;]++;
            b[s2[i]-&#39;A&#39;]++;
            n[i] = 0;
            m[i] = 0;
        }
        for (int i = 0; i &lt; 26; i++){
            n[a[i]]++;
            m[b[i]]++;
        }
        bool flag = true;
        for (int i = 0; i &lt; l; i++){
            if (n[i] != m[i]){
                flag = false;
                break;
            }
        }
        if (flag) cout &lt;&lt; &quot;YES\n&quot;;
        else cout &lt;&lt; &quot;NO\n&quot;;
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