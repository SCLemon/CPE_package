<!DOCTYPE html>
<html>
<head>
<title>uva11157</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11157</h1>
<pre class="prettyprint">
//uva11157
#include&lt;cstdio&gt;
#include&lt;iostream&gt;
#include&lt;algorithm&gt;

using namespace std;

main(){
	//t:test case//n:number of stone//d:river width
	int t, n, d, b, maxnum;
	int i, j, k;
	int stone[220];
	char ch;
	cin &gt;&gt; t;
	for (i = 0; t&gt;0; t--) {
        cin &gt;&gt; n &gt;&gt; d;
        stone[0] = 0;
        stone[1] = d;
        for (j = 0, k = 2;j &lt; n; j++){
            cin &gt;&gt; ch;
            cin.ignore();
            cin &gt;&gt; b;
            stone[k] = b;
            k++;
            if (ch == &#39;B&#39;){
                stone[k] = b;
                k++;
            }
        }
        sort(stone, stone+k);
        maxnum = 0;
        if (n == 0)
            maxnum = d;
        else{
            for (j = 2; j &lt; k; j += 2)
                maxnum = max(maxnum, stone[j] - stone[j - 2]);
            for (j = 3; j &lt; k; j += 2)
                maxnum = max(maxnum, stone[j] - stone[j - 2]);
        }
        cout &lt;&lt; &quot;Case &quot; &lt;&lt; ++i &lt;&lt; &quot;: &quot; &lt;&lt; maxnum &lt;&lt; endl;
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