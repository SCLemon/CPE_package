<!DOCTYPE html>
<html>
<head>
<title>uva1746</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1746</h1>
<pre class="prettyprint">
//uva1746
#include&lt;iostream&gt;

using namespace std;

int main(){

    int numbers;
    int origin_quote[110];
    int quote[110];
    int left, right;
    int start;
    int temp;
    int total;

    while (cin &gt;&gt; numbers){
        for (int i = 0; i &lt; 110; ++i)
            origin_quote[i] = 0;

        for (int i = 0; i &lt; numbers; ++i)
            cin &gt;&gt; origin_quote[i];

        if (origin_quote[0] &lt; origin_quote[numbers - 1])
            start = origin_quote[0];
        else
            start = origin_quote[numbers - 1];

        for (int i = start; i &gt;= 0; --i){
            for (int j = 0; j &lt; 110; ++j)
                quote[j] = origin_quote[j];
            left = 0;
            right = numbers-1;
            for (temp = i; ; ){
                if (quote[left] &lt; temp || quote[right] &lt; temp){
                    if(i == 0){
                        cout&lt;&lt;&quot;no quotation&quot;&lt;&lt;endl;
                        goto finish;
                    }
                    break;
                }
                quote[left] -= temp;
                quote[right] -= temp;
                if (quote[left] == 0)
                    ++left;
                if (quote[right] == 0)
                    --right;
                --temp;
                if (temp == 0){
                    if(i == 1){
                        if(numbers == 1 &amp;&amp; origin_quote[0] == 2 || numbers == 2 &amp;&amp; origin_quote[0] == 1 &amp;&amp; origin_quote[1] == 1){
                            cout &lt;&lt; i &lt;&lt;endl;
                            goto finish;
                        }else{
                            cout&lt;&lt;&quot;no quotation&quot;&lt;&lt;endl;
                            goto finish;
                        }
                    }

                    total = 0;
                    for (int k = left; k &lt;= right;++k){
                        total+=quote[k];
                    }
                    if(total % 2 == 0){
                        cout &lt;&lt; i &lt;&lt;endl;
                        goto finish;
                    }else
                        cout&lt;&lt;&quot;no quotation&quot;&lt;&lt;endl;
                        goto finish;
                }
            }
        }

        finish:;
    }
}</pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->