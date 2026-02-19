<!DOCTYPE html>
<html>
<head>
<title>uva11495</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11495</h1>
<pre class="prettyprint">
//uva11495
#include &lt;iostream&gt;
using namespace std;

long long merge(int *P, int left, int mid, int right){
	int *tmp = new int[right - left + 1];
	long long sum = 0;
	
	int iLeft = left;
	int iRight = mid+1;
	int iMerge = 0;
	
	// the middle reverse numbers
	while(iLeft &lt;= mid &amp;&amp; iRight &lt;= right){
		if(P[iLeft] &lt;= P[iRight]){
			tmp[iMerge++] = P[iLeft++];
		}else{
			tmp[iMerge++] = P[iRight++]; 
			sum += mid - iLeft + 1;      // key point
		}
	}
	while(iLeft &lt;= mid)
		tmp[iMerge++] = P[iLeft++];
		
	while(iRight &lt;= right)
		tmp[iMerge++] = P[iRight++];
		
	for(int i = left ; i &lt;= right ; ++i)
		P[i] = tmp[i - left];
		
	delete [] tmp;
	return sum;
}

long long mergesort(int *P, int left, int right){
	long long sum=0;
	// reverse number = left reverse numbers + right reverse numbers + the middle reverse numbers
	if(left &lt; right){
		int mid = (left + right) / 2;
		sum = mergesort(P, left, mid);
		sum += mergesort(P, mid+1, right);
		sum += merge(P, left, mid, right);
	}
	return sum;
}

int main(){
	int n;
	while(cin &gt;&gt; n &amp;&amp; n){	
		int *P = new int[n];	
		for(int i=0 ; i &lt; n ; ++i)  // read in permutation
			cin &gt;&gt; P[i];
			
		long long ans = mergesort(P,0,n-1);  // count the reverse order number

		if(ans % 2 == 0)
			cout &lt;&lt; &quot;Carlos &quot; &lt;&lt; ans &lt;&lt; endl;
		else
			cout &lt;&lt; &quot;Marcelo &quot; &lt;&lt; ans &lt;&lt; endl;
		delete [] P;
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