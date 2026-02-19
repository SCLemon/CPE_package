<!DOCTYPE html>
<html>
<head>
<title>uva12654</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva12654</h1>
<pre class="prettyprint">
//uva12654
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
#include &lt;algorithm&gt;

#define CostMax 2000000000

using namespace std;

int Arr[1005]; 
int Cost[1005]; 

void cover(int i, int t)  {
    int j;
    int cover = Arr[i] + t; // Next Cover if use this patch
    for(j = i + 1; Arr[j] &lt;= cover; ++j);
    if(Cost[j] &gt; Cost[i] + t)
        Cost[j] = Cost[i] + t;
}
 
void Output(int n) {
	for(int i = 0; i &lt; n; ++i)
		printf(&quot;%4d&quot;, Arr[i]);
	cout &lt;&lt; endl;
}

int main()  {
    int n, c, t1, t2;
    while(cin &gt;&gt; n &gt;&gt; c &gt;&gt; t1 &gt;&gt; t2) {
        for(int i = 0; i &lt; n; ++i)
            cin &gt;&gt; Arr[i];

		int Ans = 2000000;
		for(int k = 0; k &lt; n; ++k) {
			// init
			for(int i = 0; i &lt;= n; ++i)
				Cost[i] = CostMax;
			Cost[0] = 0;
 
			// make a wall
			Arr[n] = 2000000;

			for(int i = 0; i &lt; n; ++i) {
				// each one try to use two patch.
				if(Cost[i] != CostMax) {
					cover(i, t1);
					cover(i, t2);
				}
			}

			if(Cost[n] &lt; Ans)
				Ans = Cost[n];
			Arr[0] += c;
			sort(Arr, Arr + n);
		}
		
		cout &lt;&lt; Ans &lt;&lt; endl;
    }
    return 0; 
} </pre>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>

</html>
<!--
<div class="container">
<h1>Source code</h1>
<script src="/google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</div>
-->