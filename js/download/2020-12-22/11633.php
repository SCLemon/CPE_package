<!DOCTYPE html>
<html>
<head>
<title>uva11633</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11633</h1>
<pre class="prettyprint">
//uva11633
#include&lt;iostream&gt;
#include &lt;algorithm&gt;
#define Infinity 10000000
using namespace std;
int main() {
    int n,a,b;
    int num[1024];
    while(cin&gt;&gt;n) {

        if(n==0) break;

        cin&gt;&gt;a&gt;&gt;b;
        int Max = 0;
        for(int i=0; i&lt;n; i++) {
            cin&gt;&gt;num[i];
            num[i]=num[i]*6;
            Max = max(Max, num[i]);
        }

        int Min = 10000000;
        for(int i=0; i&lt;n; i++)  {
            for(int j=1; j&lt;=3; j++) {
                int s=num[i]/j;
                int x=0,y=0;

                if(s*3 &lt; Max) continue;

                for(int k=0; k&lt;n; k++) {

                    if(num[k]%s == 0) {

                        if(num[k]==s) y = y + 1;
                        else if(num[k]==2*s) y = y + 2;
                        else y = y + 3;
                    }

                    else if(s*1 &gt; num[k]){
                        x = x + s-num[k];
                        y = y + 1 ;
                    }
                    else if (s*2 &gt; num[k]){
                        x = x + s*2-num[k];
                        y = y + 2 ;
                    }
                    else if (s*3 &gt; num[k]){
                        x = x + s*3-num[k];
                        y = y + 3 ;
                    }
                }
                if(a*x+6*b*y &lt; Min)
                    Min = a*x+6*b*y;
            }
        }

        if(Min%6 == 0)
            cout&lt;&lt;Min/6&lt;&lt;endl;
        else{

            if(Min%3 == 0){
                cout&lt;&lt; (Min/3) &lt;&lt; &quot; / &quot; &lt;&lt;2&lt;&lt;endl;
            }
            else if(Min%2 == 0){
                cout&lt;&lt; (Min/2) &lt;&lt; &quot; / &quot; &lt;&lt;3&lt;&lt;endl;
            }
            else{
                cout&lt;&lt; (Min/6) &lt;&lt; &quot; / &quot; &lt;&lt;6&lt;&lt;endl;
            }
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