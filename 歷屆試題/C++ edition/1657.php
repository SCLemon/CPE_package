<!DOCTYPE html>
<html>
<head>
<title>uva1657</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1657</h1>
<pre class="prettyprint">
//uva1657
#include &lt;iostream&gt;
#include &lt;map&gt;
#include &lt;vector&gt;
#include &lt;unordered_map&gt;


using namespace std;

int main() {
    int n, m;
    while (cin&gt;&gt;n&gt;&gt;m) {
        vector&lt;pair&lt;int, int&gt;&gt; table;
        unordered_map&lt;int, int&gt; sum_mp, product_mp;

        for (int i = 1; i &lt;= n; ++i) {
            for (int j = i + 1; j &lt;= n; ++j) {
                table.emplace_back(i, j);
                sum_mp[i + j]++;
                product_mp[i * j]++;
            }
        }
        vector&lt;bool&gt; useable(table.size(), true);
        for (int i = 0; i &lt; m; ++i) {
            for (auto it = table.begin(); it != table.end(); ++it) {
                if (!(useable[it - table.begin()])) continue;
                int sum = it-&gt;first + it-&gt;second;
                int product = it-&gt;first * it-&gt;second;

                if (i % 2 == 0) {
                    if (sum_mp[sum] &lt;= 1) {
                        sum_mp.erase(sum);
                        product_mp[product]--;
                        useable[it-table.begin()] = false;
                    }
                } else {
                    if (product_mp[product] &lt;= 1) {
                        product_mp.erase(product);
                        sum_mp[sum]--;
                        useable[it-table.begin()] = false;
                    }
                }
            }
        }

        vector&lt;pair&lt;int, int&gt;&gt; res;
        if (m % 2 == 0) {
            for (const auto&amp; p : table) {
                if(!useable[&amp;p-&amp;(table.front())])continue;
                if (sum_mp[p.first + p.second] == 1) {
                    res.push_back(p);
                }
            }
        } else {
            for (const auto&amp; p : table) {
                if(!useable[&amp;p-&amp;(table.front())])continue;
                if (product_mp[p.first * p.second] == 1) {
                    res.push_back(p);
                }
            }
        }

        cout &lt;&lt; res.size() &lt;&lt; endl;
        for (const auto&amp; p : res) {
            cout &lt;&lt; p.first &lt;&lt; &quot; &quot; &lt;&lt; p.second &lt;&lt; endl;
        }
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