<!DOCTYPE html>
<html>
<head>
<title>uva300</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva300</h1>
<pre class="prettyprint">
//uva300
#include &lt;exception&gt;
#include &lt;iostream&gt;
#include &lt;map&gt;
#include &lt;string&gt;
#include &lt;vector&gt;

using namespace std;

int main() {
    int n = 0;
    const map&lt;string, int&gt; Haab{
        {&quot;pop&quot;, 0},  {&quot;no&quot;, 1},     {&quot;zip&quot;, 2},    {&quot;zotz&quot;, 3},    {&quot;tzec&quot;, 4},
        {&quot;xul&quot;, 5},  {&quot;yoxkin&quot;, 6}, {&quot;mol&quot;, 7},    {&quot;chen&quot;, 8},    {&quot;yax&quot;, 9},
        {&quot;zac&quot;, 10}, {&quot;ceh&quot;, 11},   {&quot;mac&quot;, 12},   {&quot;kankin&quot;, 13}, {&quot;muan&quot;, 14},
        {&quot;pax&quot;, 15}, {&quot;koyab&quot;, 16}, {&quot;cumhu&quot;, 17}, {&quot;uayet&quot;, 18}};
    const vector&lt;string&gt; t_name{&quot;imix&quot;,  &quot;ik&quot;,    &quot;akbal&quot;, &quot;kan&quot;,   &quot;chicchan&quot;,
                                &quot;cimi&quot;,  &quot;manik&quot;, &quot;lamat&quot;, &quot;muluk&quot;, &quot;ok&quot;,
                                &quot;chuen&quot;, &quot;eb&quot;,    &quot;ben&quot;,   &quot;ix&quot;,    &quot;mem&quot;,
                                &quot;cib&quot;,   &quot;caban&quot;, &quot;eznab&quot;, &quot;canac&quot;, &quot;ahau&quot;};

    cin &gt;&gt; n;
    cout &lt;&lt; n &lt;&lt; endl;
    for (int i = 0; i &lt; n; i++) {
        int h_year = 0, h_day = 0, sum = 0;
        string h_strday = &quot;&quot;, h_month = &quot;&quot;;

        cin &gt;&gt; h_strday &gt;&gt; h_month &gt;&gt; h_year;

        h_strday.erase(h_strday.end() - 1);
        h_day = stoi(h_strday);

        try {
            sum = h_day + 20 * Haab.at(h_month) + 365 * h_year;
        } catch (const out_of_range&amp; e) {
            cerr &lt;&lt; e.what() &lt;&lt; &quot; &quot; &lt;&lt; h_month &lt;&lt; endl;
        };

        cout &lt;&lt; sum % 13 + 1 &lt;&lt; &quot; &quot; &lt;&lt; t_name[sum % 20] &lt;&lt; &quot; &quot; &lt;&lt; sum / 260
             &lt;&lt; endl;
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