<!DOCTYPE html>
<html>
<head>
<title>uva10038</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10038</h1>
<pre class="prettyprint">
//uva10038
#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt;

using namespace std;

int main() {
	bool isJolly;
	int dataNum, *data;
	vector&lt;int&gt; minus;

	while(cin &gt;&gt; dataNum) {	// 紀錄序列長度
		// 初始化
		data = new int [dataNum];
		minus.clear();
		isJolly = true;

		// 紀錄整數序列
		for(int d = 0; d &lt; dataNum; d++)
			cin &gt;&gt; data[d];

		// 計算相鄰二數之差值
		for(int i = 1; i &lt; dataNum; i++)
			minus.push_back(abs(data[i] - data[i - 1]));

		// 排序
		sort(minus.begin(), minus.end());

		// 判斷是否為 Jolly jumper
		for(int i = 0; i &lt; minus.size() &amp;&amp; isJolly; i++)
			if(minus[i] != i + 1)
				isJolly = false;

		// 輸出判斷結果
		if(isJolly)
			cout &lt;&lt; &quot;Jolly&quot; &lt;&lt; endl;
		else
			cout &lt;&lt; &quot;Not jolly&quot; &lt;&lt; endl;

		// 釋放記憶體
		delete [] data;
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