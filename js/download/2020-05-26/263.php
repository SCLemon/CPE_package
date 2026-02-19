<!DOCTYPE html>
<html>
<head>
<title>uva263</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva263</h1>
<pre class="prettyprint">
//uva263
#include&lt;iostream&gt;
#include&lt;sstream&gt;
#include&lt;algorithm&gt;
#include&lt;vector&gt;
#include&lt;set&gt;
using namespace std;
bool cmp(char a, char b){
    return a&gt;b;
}
int main(){
    int n;
    set&lt;long long&gt; same;
    string s,s1;
    while(getline(cin,s) &amp;&amp; s!=&quot;0&quot;){
        same.clear();
        stringstream sti(s);
        long long int o1=0,a1 =0,b1=0;
        sti &gt;&gt; o1;
        cout&lt;&lt;&quot;Original number was &quot;&lt;&lt;o1&lt;&lt;endl;
       while(1){
        sort(s.begin(),s.end(),cmp);
        stringstream sti1(s);
        sti1 &gt;&gt; a1;
        sort(s.begin(),s.end());
        stringstream sti2(s);
        sti2 &gt;&gt; b1;
        cout&lt;&lt;a1&lt;&lt;&quot; - &quot;&lt;&lt;b1&lt;&lt;&quot; = &quot;&lt;&lt;a1-b1&lt;&lt;endl;
        if( same.find(a1-b1) != same.end() ){
            break;
        }
         same.insert(a1-b1);
         stringstream its;
         its &lt;&lt; a1-b1;
         its &gt;&gt; s;
       }
       cout&lt;&lt;&quot;Chain length &quot;&lt;&lt;same.size()+1&lt;&lt;endl&lt;&lt;endl;
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