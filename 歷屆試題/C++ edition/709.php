<!DOCTYPE html>
<html>
<head>
<title>uva709</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>ÁØÑ‰æãÁ®ãÂºèÁ¢º uva709</h1>
<pre class="prettyprint">
//uva709
#include &lt;iostream&gt;
#include &lt;string&gt; 
using namespace std;

int main(){	
	int width;
	while(cin &gt;&gt; width &amp;&amp; width){
		cin.ignore();
		
		string words[10050];
		int sumLength[10050];
		int dp[10050];
		int endWord[10050];
		
		string tmp;
		int wordCnt = 1;  // not use 0
		// read the paragraph
		while(getline(cin,tmp) &amp;&amp; tmp.size() &gt; 0){
			// split ( including a long space
			int begin = 0;
			int end = 0;
			while(end != -1){
				end = tmp.find(&#39; &#39;,begin);
				words[wordCnt] = tmp.substr(begin,end - begin);
				if(words[wordCnt].size() != 0) ++wordCnt;
				begin = end+1;
			}
		}
		
		// calculate the length after pick each word
		sumLength[0] = 0;
		for(int i = 1 ; i &lt; wordCnt ; ++i)
			sumLength[i] = sumLength[i-1] + words[i].size();
		
		// dp from right to left
		dp[wordCnt] = 0;  // the dp initial state
		// calculate the best position to put each remaining word
		for(int i = wordCnt-1 ; i &gt; 0 ; --i){  // i: curWord
			dp[i] = dp[i+1] + 500;  // penalty of one word occupying one line
			endWord[i] = i;         // start from words[i] ends at words[i]
			
			// try to pick in as more words as possible( ... °B are°Bareactually°Bareactuallyconsidering.) 
			for(int j=i+1 ; j &lt; wordCnt ; ++j){
				if(sumLength[j] - sumLength[i-1] + j - i &gt; width) break;  // can not be a row (no space for &#39; &#39;)
				int totalSpace = width - (sumLength[j] - sumLength[i-1]); // total extra space to fill
				int avgSpace = totalSpace / (j-i);                        // (average) middle space after between i to j words
				int extraSpace = totalSpace - avgSpace*(j-i);             // number of extra space
				// penalty of one row:  (number of avgSpace)*(length of space)^2 + (number of extra space)*(length of extra space)^2
				// length of space = midAvgSpace - 1 (that is, if midAvgSpace = 4, then penalty is 3^2)
				// length of extra space = midAvgSpace
				int cost = (j-i-extraSpace)*(avgSpace-1)*(avgSpace-1) + (extraSpace)*avgSpace*avgSpace;
				if( dp[i] &gt;= dp[j+1] + cost ){
					dp[i] = dp[j+1] + cost;
					endWord[i] = j;    // start from words[i] ends at words[j]
				}
			}
		}
		
		// print the paragraph
		int curWord = 1;
		while(curWord &lt; wordCnt){
			if(endWord[curWord] &gt; curWord){
				int i = curWord;
				int j = endWord[i]/* - 1*/;
				int totalSpace = width - (sumLength[j] - sumLength[i-1]);
				int avgSpace = totalSpace / (j-i);
				int extraSpace = totalSpace - avgSpace*(j-i);
				
				int count = 0;         // how many avgSpace have been printed
				cout &lt;&lt; words[i];      // start from words[i] ends at words[j]
				for(int nextWord = i+1 ; nextWord &lt;= j ; ++nextWord){
					// print &quot;avgSpace&quot; space
					for(int space = 0 ; space &lt; avgSpace ; ++space)
						cout &lt;&lt; &quot; &quot;;
					if(++count &gt; (j-i-extraSpace))
						cout &lt;&lt; &quot; &quot;;
					cout &lt;&lt; words[nextWord];					
				}
				cout &lt;&lt; endl;
			}else{
				// if the word occupies one whole line
				cout &lt;&lt; words[curWord] &lt;&lt; endl;
			}
			curWord = endWord[curWord] + 1;
		}
		cout &lt;&lt; endl;
		
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