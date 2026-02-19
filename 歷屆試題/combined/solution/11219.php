<!DOCTYPE html>
<html>
<head>
<title>uva11219</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11219</h1>
<pre class="prettyprint">
//uva11219
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
using namespace std;

int main() {
    int T;
    int now_day, now_month, now_year;
    int birth_day, birth_month, birth_year;
    while (scanf(&quot;%d&quot;, &amp;T) != EOF) {
        for (int i = 1; i &lt;= T; i++) {
            scanf(&quot;%d/%d/%d&quot;, &amp;now_day, &amp;now_month, &amp;now_year);
            scanf(&quot;%d/%d/%d&quot;, &amp;birth_day, &amp;birth_month, &amp;birth_year);
            printf(&quot;Case #%d: &quot;, i);
            if (birth_year &gt; now_year)
                printf(&quot;Invalid birth date\n&quot;);
            else if (birth_year == now_year) {
                if (birth_month &gt; now_month)
                    printf(&quot;Invalid birth date\n&quot;);
                else if (birth_month == now_month) {
                    if (birth_day &gt; now_day)
                        printf(&quot;Invalid birth date\n&quot;);
                    else
                        printf(&quot;0\n&quot;);
                } else
                    printf(&quot;0\n&quot;);
            } else {
                if (birth_month &gt; now_month)
                    if (now_year - birth_year - 1 &gt; 130)
                        printf(&quot;Check birth date\n&quot;);
                    else
                        printf(&quot;%d\n&quot;, now_year - birth_year - 1);
                else if (birth_month == now_month) {
                    if (birth_day &gt; now_day)
                        if (now_year - birth_year - 1 &gt; 130)
                            printf(&quot;Check birth date\n&quot;);
                        else
                            printf(&quot;%d\n&quot;, now_year - birth_year - 1);
                    else if (now_year - birth_year &gt; 130)
                        printf(&quot;Check birth date\n&quot;);
                    else
                        printf(&quot;%d\n&quot;, now_year - birth_year);
                } else if (now_year - birth_year &gt; 130)
                    printf(&quot;Check birth date\n&quot;);
                else
                    printf(&quot;%d\n&quot;, now_year - birth_year);
            }
        }
    }
    return 0;
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