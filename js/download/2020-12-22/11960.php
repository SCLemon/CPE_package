<!DOCTYPE html>
<html>
<head>
<title>uva11960</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11960</h1>
<pre class="prettyprint">
//uva11960
#include&lt;iostream&gt;
#include&lt;math.h&gt;
using namespace std ;

int Table[1000001],Ans[1000001];

void Create_Table(){

    Table[1000001]={0};
    int Max = 0,ans;

    for(int i=1;i&lt;=1000000;i++){
        for(int j=i;j&lt;=1000000;j=j+i){
            Table[j] += 1;
        }
    }
   
    for(int i=1;i&lt;=1000000;i++){

        if(Max &lt;= Table[i]){
            Max = Table[i];
            ans = i;
            Ans[i] = ans;
        }
        else{
            Ans[i] = ans ;
        }
    }

}

int main(){

    int n,m;
    Create_Table();
    cin&gt;&gt;n;
    while(n--){

        cin&gt;&gt;m;
        cout&lt;&lt;Ans[m]&lt;&lt;endl;
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