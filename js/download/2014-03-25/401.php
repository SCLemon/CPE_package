<!DOCTYPE html>
<html>
<head>
<title>uva401</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva401</h1>
<pre class="prettyprint">
//uva401
#include&lt;stdio.h&gt;
#include&lt;iostream&gt;
#include&lt;map&gt;
 
using namespace std;

 
string s = &quot;ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789&quot;;
string r = &quot;A   3  HIL JM O   2TUVWXY51SE Z  8 &quot;;
 
int main() {
    string line;
    bool m = true;
    bool p = true;
    map&lt;char, char&gt; map;
    for(int i = 0; i &lt; s.length(); i++)
        map[s[i]] = r[i];
    while(cin &gt;&gt; line)  {
        m = true;
        
        for(int i = 0; i &lt; line.length() / 2 + line.length() % 2; i++)
            if(line[line.length() - i - 1] != map[line[i]])
                m = false;
        p = true;
        for(int i = 0; i &lt; line.length() / 2; i++)
            if(line[line.length() - i - 1] != line[i])
                p = false;
            
        if(!m &amp;&amp; !p)
            cout &lt;&lt; line &lt;&lt; &quot; -- is not a palindrome.\n&quot;;
        else if(!m &amp;&amp; p)
            cout &lt;&lt; line &lt;&lt; &quot; -- is a regular palindrome.\n&quot;;
        else if(m &amp;&amp; !p)
            cout &lt;&lt; line &lt;&lt; &quot; -- is a mirrored string.\n&quot;;
        else
            cout &lt;&lt; line &lt;&lt; &quot; -- is a mirrored palindrome.\n&quot;;
        
        cout &lt;&lt; endl;
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