<!DOCTYPE html>
<html>
<head>
<title>uva11085</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11085</h1>
<pre class="prettyprint">
//uva11085
#include&lt;iostream&gt;
#include &lt;stdio.h&gt;
using namespace std;
int num = 0;
int ans[100][8], temp[8];
bool row[8] = {false};
bool left_go[15] = {false};
bool right_go[15] = {false};
void eightQueen(int c){
	if(c == 8){
		for(int i = 0; i &lt; 8; i++)
			ans[num][i] = temp[i] + 1;
		num++;
		return;
	}
	for(int i = 0; i &lt; 8; i++){
		int ll = c - i + 7;
		int rr = c + i;
		if((!row[i]) &amp;&amp; (!left_go[ll]) &amp;&amp; (!right_go[rr])){
			row[i] = left_go[ll] = right_go[rr] = 1;
			temp[c] = i;
			eightQueen(c + 1);
			row[i] = left_go[ll] = right_go[rr] = 0;
		}
	}
}

int main(){
	eightQueen(0);
	int case_n, i, j, input[8], min;
	case_n = 1;
	while(cin &gt;&gt; input[0]){
		for(i = 1; i &lt; 8; i++)
			cin&gt;&gt;input[i];
		min = 99999;
		for(i=0;i&lt;num;i++){
			int moveCount = 0;
			for(j=0;j&lt;8;j++){
				if(ans[i][j] != input[j]){
					moveCount ++;
				}
			}
			if(moveCount &lt; min)
                min = moveCount;
		}
		cout &lt;&lt; &quot;Case &quot; &lt;&lt; case_n &lt;&lt; &quot;: &quot; &lt;&lt; min &lt;&lt; endl;
		case_n++;
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