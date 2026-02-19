<!DOCTYPE html>
<html>
<head>
<title>uva10050</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10050</h1>
<pre class="prettyprint">
//uva10050
#include&lt;iostream&gt;
using namespace std;
int main(){

    int test_case ;
    int N ; // Days
    int P ; // number of political parties
    int P1[100] ;
    int x ;
    int sum = 0 ;
    int hartal_parameter[3651];

    // input
    cin &gt;&gt; test_case ;

    for(int i=0 ; i&lt;test_case ; i++){

        int counter = 0;

        cin &gt;&gt; N &gt;&gt; P;
        for(int j=0 ; j&lt;P ; j++) cin&gt;&gt; P1[j] ;

        //init
        for(int j=0 ; j&lt;=N ; j++) hartal_parameter[j] = 0 ;


         // calculate hartal_parameter ;
        for(int j=0 ; j&lt;P ;j++){

            x = P1[j] ;
            sum = 0;
            while(sum &lt;= N) {

                hartal_parameter[sum] = 1;
                sum += x ;
            }

        }

        //delete Fri Sat

        for(int j=1 ; j&lt;=N ; j++){

            if(j%7 == 6 || j%7 == 0) hartal_parameter[j] = 0;

        }

        for(int j=1 ; j&lt;=N ; j++){

            if (hartal_parameter[j] == 1) counter++;

        }

        cout &lt;&lt; counter &lt;&lt; endl ;
        //fout&lt;&lt;counter&lt;&lt;endl;
    }

    return 0 ;

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