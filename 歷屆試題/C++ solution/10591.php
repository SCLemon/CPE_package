<!DOCTYPE html>
<html>
<head>
<title>uva10591</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10591</h1>
<pre class="prettyprint">
//uva10591
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
int main(void) {
    int testcase, input, i, ans, sum;
    scanf(&quot;%d&quot;, &amp;testcase);
    for (i = 1; i &lt;= testcase; i++){
        scanf(&quot;%d&quot;, &amp;input);
        sum = 0;
        ans = input;
        while (ans != 0){
            sum = sum + (ans % 10) * (ans % 10);
            ans = ans / 10;

        }
        ans = sum; //S1
        int check[1000] = { 0 };
        check[1] = 1;
        while (!check[ans]){

            check[ans] = 1;
            sum = 0;
            while (ans != 0){
                sum = sum + (ans % 10) * (ans % 10);
                ans = ans / 10;
            }
            ans = sum;
        }
        if (ans == 1)
            printf(&quot;Case #%d: %d is a Happy number.\n&quot;, i, input);
        else
            printf(&quot;Case #%d: %d is an Unhappy number.\n&quot;, i, input);

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