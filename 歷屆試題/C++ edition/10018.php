<!DOCTYPE html>
<html>
<head>
<title>uva10018</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10018</h1>
<pre class="prettyprint">
//uva10018
#include &lt;iostream&gt;
#include &lt;cstdio&gt;
#include &lt;cstdlib&gt;
#include &lt;cstring&gt;

using namespace std;

int main() {
	int data;

	cin &gt;&gt; data;	// 取得要判斷的資料數

	for(int d = 0; d &lt; data; d++) {
		char sNum[11], srNum[11] = &quot;&quot;;
		bool isReverse = false;
		int count = 0;
		long long int num, rNum;

		// 讀取數字並反轉
		cin &gt;&gt; sNum;
		for(int i = strlen(sNum) - 1, j = 0; i &gt;= 0; i--, j++)
			srNum[j] = sNum[i];

		while(!isReverse) {
			count++;	// 統計執行了幾次
			
			// 從文字轉成數字型態好做計算
			num = atol(sNum);
			rNum = atol(srNum);

			// 從數字再轉回文字並反轉好比較回文
			sprintf(sNum, &quot;%lld&quot;, num + rNum);
			for(int i = strlen(sNum) - 1, j = 0; i &gt;= 0; i--, j++)
				srNum[j] = sNum[i];

			// 判斷是否回文
			if(strcmp(sNum, srNum) == 0)
				isReverse = true;
		}

		// 輸出最後答案
		cout &lt;&lt; count &lt;&lt; &#39; &#39; &lt;&lt; sNum &lt;&lt; endl;
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