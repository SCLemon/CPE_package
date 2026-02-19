<!DOCTYPE html>
<html>
<head>
<title>uva11336</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11336</h1>
<pre class="prettyprint">
//uva11336
#include &lt;iostream&gt;
#include &lt;map&gt;
#include &lt;string&gt;
#include &lt;sstream&gt;
#include &lt;cstring&gt;
#include &lt;vector&gt;

using namespace std;

map&lt;string,int&gt; nameTable;
map&lt;int,string&gt; nameTablei;
vector&lt;pair&lt;int,int&gt;&gt; roadList[2];
string mapName[2];
int oldmapN;

int getIdbyName(const string&amp; name) {
	map&lt;string,int&gt;::iterator it = nameTable.find(name);
	if(it == nameTable.end())
		return -1;	
	return it -&gt; second;
}

const string&amp; getNamebyId(int id) {
	map&lt;int,string&gt;::iterator it = nameTablei.find(id);
	return it -&gt; second;
}

int putName(const string&amp; name) {
	int key = nameTable.size();
	nameTable.insert(pair&lt;string, int&gt;(name, key));
	nameTablei.insert(pair&lt;int, string&gt;(key, name));	
	return key;
}

void doCal();

int main(){
	string input;
	const int LOADMAP = 1;
	const int LOADSTREET = 2;
	int state = LOADMAP;
	int mapNo = 0;
	while(getline(cin,input)) {
		stringstream iss(input);
		if(state == LOADMAP){
			//Map name
			iss &gt;&gt; mapName[mapNo];
			if(mapNo == 0 &amp;&amp; mapName[mapNo] == &quot;END&quot;)
				return 0;
			state = LOADSTREET;
			continue;
		}
		
		if(strstr(input.c_str(),&quot;* * *&quot;) != NULL){
			state = LOADMAP;
			if(mapNo == 1) {
				doCal();
				mapNo = 0;
				mapName[0].clear();
				mapName[1].clear();
				roadList[0].clear();
				roadList[1].clear();			
				nameTablei.clear();
				nameTable.clear();	
			}
			else {
				mapNo = 1;
				oldmapN = nameTable.size();
			}
			continue;
		}
		string place[2];	
		iss &gt;&gt; place[0] &gt;&gt; place[1];
		int placeId [2];
		for(int i = 0; i &lt; 2; ++i) { //get PlaceID
			placeId[i] = getIdbyName(place[i]);
			if(placeId[i] == -1) {
				placeId[i] = putName(place[i]);
			}	
		}
		
		roadList[mapNo].push_back(pair&lt;int, int&gt;(placeId[0], placeId[1]));
	}

	return 0;
}

void doCal(){
	int martixSize = nameTable.size();
	
	int newMap[martixSize * martixSize];
	for(int i = 0; i &lt; martixSize * martixSize; ++i) {
		newMap[i] = 0;	
	}

	for(int i = 0; i &lt; roadList[1].size(); ++i) {
		int start = roadList[1][i].first, end = roadList[1][i].second ;
		newMap[start * martixSize + end] = newMap[end * martixSize + start] = 1;
	}
		
	for(int n = oldmapN; n &lt; martixSize; ++n)
		for(int i = 0; i &lt; martixSize; ++i)
			for(int j = 0; j &lt; martixSize;++j)
				newMap[i * martixSize + j] |= newMap[i * martixSize + n] &amp;&amp; newMap[n * martixSize + j];
	
	for(int i = 0; i &lt; roadList[0].size(); ++i) {
		int start = roadList[0][i].first, end = roadList[0][i].second;
		if(newMap[(roadList[0][i].first) * martixSize + (roadList[0][i].second)] == 0 ) {
			//no route
			cout &lt;&lt; &quot;NO: &quot; &lt;&lt; mapName[1] &lt;&lt; &quot; is not a more detailed version of &quot; &lt;&lt; mapName[0] &lt;&lt; &quot;\n&quot;;
			return;
		}
	}
	
	cout &lt;&lt; &quot;YES: &quot; &lt;&lt; mapName[1] &lt;&lt; &quot; is a more detailed version of &quot; &lt;&lt; mapName[0] &lt;&lt; &quot;\n&quot;;
	return;
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