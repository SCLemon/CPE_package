<!DOCTYPE html>
<html>
<head>
<title>uva13257</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva13257</h1>
<pre class="prettyprint">
//uva13257
#include &lt;bits/stdc++.h&gt;

using namespace std;
int re[100002];


int main() {
    int cas, c[26], seq;
    bool check[26][26];
    vector&lt;int&gt; a[26];
    string s;

    scanf(&quot;%d&quot;, &amp;cas);
    getchar();
    while (cas--) {
        for (int i = 0; i&lt;26; i++)
            for (int j = 0; j&lt;26; j++)
                check[i][j] = 0;
        getline(std::cin, s);

        if (s.length()&lt;3) {
            printf(&quot;0\n&quot;);
            continue;
        }
        memset(c, 0, sizeof(int)*26);
        memset(re, 0, sizeof(int)*100002);
        a[ (int)(s[0]-&#39;A&#39;) ].push_back(0);
        a[ (int)(s[1]-&#39;A&#39;) ].push_back(1);
        for (int i = 2, j = 0; i&lt;s.length(); i++) {
            j = (int)(s[i]-&#39;A&#39;);
            a[j].push_back(i);
            c[j]++;
            if (c[j]==1)
                re[2]++;
        }
        for (int i = 3, j = 0; i&lt;s.length(); i++) {
            j = (int)(s[i-1]-&#39;A&#39;);
            c[j]--;
            re[i] = c[j]==0?re[i-1]-1:re[i-1];

        }
        seq = 0;
        for (int i = 0; i&lt;26; i++) {
            for (int j = 0; j&lt;26; j++) {
                if (i == j &amp;&amp; a[i].size()&gt;1) {
                    seq+= re[a[j][1]+1];
                }
                else if(i != j &amp;&amp; !a[i].empty() &amp;&amp; !a[j].empty() &amp;&amp; a[j][a[j].size()-1]&gt;a[i][0]) {

                    int k = 0, l = a[j].size(), temp;

                    while (k!=l) {
                        temp = k+(l-k)/2;
                        if (a[j][temp]&gt;a[i][0])
                            l = temp;
                        else
                            k = temp+1;
                    }
                    seq+= re[a[j][k]+1];
                }
            }
        }


        printf(&quot;%d\n&quot;, seq);
        for (int i = 0; i&lt;26; i++)
            a[i].clear();
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