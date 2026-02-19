<!DOCTYPE html>
<html>
<head>
<title>uva679</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>ç¯„ä¾‹ç¨‹å¼ç¢¼ uva679</h1>
<pre class="prettyprint">
//uva679
#include &lt;iostream&gt;

using namespace std;

int main()
{
    int n,D,I;

    while (cin &gt;&gt; n &amp;&amp; n!=-1) {
        while(n--) {

            cin&gt;&gt;D&gt;&gt;I;
            int root = 1;
            for(int i=1; i&lt;=D; i++)
            {
                if((I%2)==0){ //°¸¼Æ¥k¤l¾ğ
                    root = 2*root+1; I=I/2;

                }else{  //°ò¼Æ¥ª¤l¾ğ
                    root = 2*root; I = (I+1)/2;
                }
            }
            cout&lt;&lt;root/2&lt;&lt;endl;
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