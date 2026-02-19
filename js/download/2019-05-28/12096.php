<!DOCTYPE html>
<html>
<head>
<title>uva12096</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12096</h1>
<pre class="prettyprint">
//uva12096
#include&lt;bits/stdc++.h&gt;

using namespace std;

int main() {
    int cas, n;
    char op[15];

    scanf(&quot;%d&quot;, &amp;cas);
    while (cas--) {
        scanf(&quot;%d&quot;, &amp;n);
        getchar();

        stack&lt; set&lt;int&gt; &gt; a;
        map&lt;set&lt;int&gt;, int&gt; ma;

        int it = 0;

        for (int cass = 0; cass&lt;n; cass++) {
            scanf(&quot;%s&quot;, &amp;op);
            if(op[0] == &#39;P&#39;) {
                set&lt;int&gt; temp;
                a.push(temp);
            }
            else if (op[0] == &#39;D&#39;) {

                set&lt;int&gt; temp = a.top();
                a.pop(), a.push(temp), a.push(temp);
            }
            else if (op[0] == &#39;A&#39;) {
                set&lt;int&gt; temp = a.top();
                a.pop();

                if (!ma.count(temp)) {
                    a.top().insert(it), ma[temp] = it, it++;
                }
                else if ( !a.top().count(ma[temp]) )
                    a.top().insert( ma[temp] );
            }
            else if (op[0] == &#39;U&#39;) {
                set&lt;int&gt; temp = a.top();
                a.pop();
                set&lt;int&gt; temp1 = a.top();
                a.pop();
                set&lt;int&gt; temp2;

                map&lt;set&lt;int&gt;, int&gt;::iterator iter;
                for (iter = ma.begin(); iter != ma.end(); iter++) {
                    int x = iter-&gt;second;
                    if (temp.count(x) || temp1.count(x))
                        temp2.insert(x);
                }
                a.push(temp2);
            }
            else {
                set&lt;int&gt; temp = a.top();
                a.pop();
                set&lt;int&gt; temp1 = a.top();
                a.pop();
                set&lt;int&gt; temp2;

                map&lt;set&lt;int&gt;, int&gt;::iterator iter;
                for (iter = ma.begin(); iter != ma.end(); iter++) {
                    int x = iter-&gt;second;
                    if(temp.count(x) &amp;&amp; temp1.count(x))
                        temp2.insert(x);
                }
                a.push(temp2);
            }
            printf(&quot;%d\n&quot;, a.top().size());
        }
        printf(&quot;***\n&quot;);
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