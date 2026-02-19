<!DOCTYPE html>
<html>
<head>
<title>uva855</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva855</h1>
<pre class="prettyprint">
//uva855
#include &lt;iostream&gt;
#include &lt;bits/stdc++.h&gt;
using namespace std;

int x[50005];
int y[50005];
int main(){
    int n;
    cin&gt;&gt;n;
    while(n--){
        int S,A,F;
        cin&gt;&gt;S&gt;&gt;A&gt;&gt;F;
        for(int i=0;i&lt;F;i++){
            cin&gt;&gt;x[i]&gt;&gt;y[i];
        }
        sort(x,x+F);
        sort(y,y+F);
        if(F%2) cout&lt;&lt;&quot;(Street: &quot;&lt;&lt;x[F/2]&lt;&lt;&quot;, Avenue: &quot;&lt;&lt;y[F/2]&lt;&lt;&quot;)&quot;&lt;&lt;endl;
        else cout&lt;&lt;&quot;(Street: &quot;&lt;&lt;x[(F-1)/2]&lt;&lt;&quot;, Avenue: &quot;&lt;&lt;y[(F-1)/2]&lt;&lt;&quot;)&quot;&lt;&lt;endl;
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