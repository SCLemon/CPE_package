<!DOCTYPE html>
<html>
<head>
<title>uva11489</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11489</h1>
<pre class="prettyprint">
//uva11489
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;string&gt; 
using namespace std;

int main(){

    int n;
    int nowcase = 0;
    string s;

    cin &gt;&gt; n;
    for(int i=0 ; i &lt; n ; i++){
        cin &gt;&gt; s;
        nowcase++;
        int sum = 0;
        int counter = 0;
        vector&lt;int&gt; num;
        for(int j=0 ; j &lt; s.length() ; j++){
            num.push_back(s[j]-&#39;0&#39;);
            sum += s[j]-&#39;0&#39;;
        }
        
        for(int j=0 ; j &lt; num.size(); j++){
            if(num[j]%3 == 0) counter++;
        }

        if(sum%3 == 0){
            if(counter%2 == 0)
				cout &lt;&lt; &quot;Case &quot; &lt;&lt; nowcase &lt;&lt; &quot;: T&quot; &lt;&lt; endl;
            else
				cout &lt;&lt; &quot;Case &quot; &lt;&lt; nowcase &lt;&lt; &quot;: S&quot; &lt;&lt; endl;
        }
        else{
            for(int j=0 ; j &lt; num.size() ; j++){
                if((sum-num[j])%3 == 0){
                    if(counter%2 == 0)
						cout &lt;&lt; &quot;Case &quot; &lt;&lt; nowcase &lt;&lt; &quot;: S&quot; &lt;&lt; endl;
                    else 
						cout &lt;&lt; &quot;Case &quot; &lt;&lt; nowcase &lt;&lt; &quot;: T&quot; &lt;&lt; endl;
                    break;
                }
                else if(j == num.size()-1){
                    cout &lt;&lt; &quot;Case &quot; &lt;&lt; nowcase &lt;&lt; &quot;: T&quot; &lt;&lt; endl;
                    break;
                }
            }
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