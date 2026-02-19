<!DOCTYPE html>
<html>
<head>
<title>uva11040</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11040</h1>
<pre class="prettyprint">
//uva11040
#include &lt;iostream&gt;

int arr[9][9];

void getInput();
void doOutput();
void makeBaseRow();
void makeArrByBaseRow();

int main() {
	int case_n;
	std::cin &gt;&gt; case_n;
	while(case_n--) {
		getInput();
		makeBaseRow();
		makeArrByBaseRow();
		doOutput();
	}
	return 0;

}

void getInput() {
	using namespace std;
	cin &gt;&gt; arr[0][0];

	cin &gt;&gt; arr[2][0] &gt;&gt; arr[2][2];

	cin &gt;&gt; arr[4][0] &gt;&gt; arr[4][2] &gt;&gt; arr[4][4];

	cin &gt;&gt; arr[6][0] &gt;&gt; arr[6][2] &gt;&gt; arr[6][4] &gt;&gt; arr[6][6];

	cin &gt;&gt; arr[8][0] &gt;&gt; arr[8][2] &gt;&gt; arr[8][4] &gt;&gt; arr[8][6] &gt;&gt; arr[8][8];
}

void doOutput() {
	using namespace std;
	for(int i = 0; i &lt; 9; ++i) {
		for(int j = 0; j &lt; i; ++j) {
			cout &lt;&lt; arr[i][j] &lt;&lt; &#39; &#39;;
		}
		cout &lt;&lt; arr[i][i] &lt;&lt; endl;
	}
}

void makeBaseRow() {
	// D = a + 2b + c ==&gt; b = (D - a - c) / 2
	arr[8][1] = (arr[6][0] - arr[8][0] - arr[8][2]) / 2;
	arr[8][3] = (arr[6][2] - arr[8][2] - arr[8][4]) / 2;
	arr[8][5] = (arr[6][4] - arr[8][4] - arr[8][6]) / 2;
	arr[8][7] = (arr[6][6] - arr[8][6] - arr[8][8]) / 2;
}

void makeArrByBaseRow() {
	for(int i = 7; i &gt;= 0; --i)
		for(int j = 0; j&lt;= i; ++j)
			arr[i][j] = arr[i + 1][j] + arr[i + 1][j + 1];
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