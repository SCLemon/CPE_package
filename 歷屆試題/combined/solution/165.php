<!DOCTYPE html>
<html>
<head>
<title>uva165</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva165</h1>
<pre class="prettyprint">
//uva165
#include &lt;bits/stdc++.h&gt;
using namespace std;

int h,k,ans[15],maxValue;

bool check(int target,int curStamp,int usedStamp, int sum,int stamps[],int end){
	if(sum == target) return true;
	else if(curStamp == end || usedStamp == h) return false;
	else if(check(target,curStamp+1,usedStamp,sum,stamps,end)) return true;
	else if(check(target,curStamp,usedStamp+1,sum+stamps[curStamp],stamps,end)) return true;
	return false;
}

void DFS(int curMax,int stamps[],int end){
	if (check(curMax,0,0,0,stamps,end))
		DFS(curMax+1,stamps,end);
	if (end &lt; k){
		stamps[end] = curMax;
		++end;
		DFS(curMax+1,stamps,end);
		--end;
		stamps[end] = -1;
	}
	if (curMax-1 &gt; maxValue){
		maxValue = curMax-1;
		memcpy(ans,stamps,sizeof(ans));
	}
}

int main(){
	int stamps[15];
	while (cin &gt;&gt; h &gt;&gt; k){
		if (h == 0 &amp;&amp; k == 0) break;
		for (int i = 0; i &lt; 15; ++i)
			stamps[i] = -1;
		maxValue = -1;
		DFS(1,stamps,0);
		
		/*for( int i = 0; i &lt; k; ++i)
			cout &lt;&lt; setw(3) &lt;&lt; ans[i];
		cout &lt;&lt; &quot; -&gt;&quot; &lt;&lt; setw(3) &lt;&lt; maxValue &lt;&lt; endl;*/
		cout&lt;&lt;maxValue&lt;&lt;endl;
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