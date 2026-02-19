<!DOCTYPE html>
<html>
<head>
<title>uva10415</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10415</h1>
<pre class="prettyprint">
//uva10415
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt; 
#include &lt;string.h&gt; 
int main(){
	int n ;
	scanf(&quot;%d&quot;, &amp;n) ;	
	char note[300] = {0} ;	
	getchar();
	while(n--){
		int i, j, finger[11] = {0}, ans[11] = {0} ;
		char note[300] = {0} ;
		gets(note) ;		
		for(i = 0 ; i &lt; strlen(note) ; i++){
			int temp[11] = {0} ;
			if(note[i] == &#39;c&#39;)
				temp[2] = temp[3] = temp[4] = temp[7] = temp[8] = temp[9] = temp[10] = 1 ;
			if(note[i] == &#39;d&#39;)
				temp[2] = temp[3] = temp[4] = temp[7] = temp[8] = temp[9] = 1 ;
			if(note[i] == &#39;e&#39;)
				temp[2] = temp[3] = temp[4] = temp[7] = temp[8] = 1 ;
			if(note[i] == &#39;f&#39;)
				temp[2] = temp[3] = temp[4] = temp[7] = 1 ;
			if(note[i] == &#39;g&#39;)
				temp[2] = temp[3] = temp[4] = 1 ;															
			if(note[i] == &#39;a&#39;)
				temp[2] = temp[3] = 1 ;
			if(note[i] == &#39;b&#39;)
				temp[2] = 1 ;								
			if(note[i] == &#39;C&#39;)
				temp[3] = 1 ;					
			if(note[i] == &#39;D&#39;)
				temp[1] = temp[2] = temp[3] = temp[4] = temp[7] = temp[8] = temp[9] = 1 ;
			if(note[i] == &#39;E&#39;)
				temp[1] = temp[2] = temp[3] = temp[4] = temp[7] = temp[8] = 1 ;				
			if(note[i] == &#39;F&#39;)
				temp[1] = temp[2] = temp[3] = temp[4] = temp[7] = 1 ;					
			if(note[i] == &#39;G&#39;)
				temp[1] = temp[2] = temp[3] = temp[4] = 1 ;	
			if(note[i] == &#39;A&#39;)
				temp[1] = temp[2] = temp[3] = 1 ;					
			if(note[i] == &#39;B&#39;)
				temp[1] = temp[2] = 1 ;					
			for(j = 1 ; j &lt;= 10 ; j++){
				if((temp[j] == 1) &amp;&amp; (finger[j] != 1))
					ans[j] ++ ;
				finger[j] = temp[j] ;
			}
		}
		for(i = 1 ; i &lt;= 9 ; i++)
			printf(&quot;%d &quot;, ans[i]) ;
		printf(&quot;%d\n&quot;, ans[10]) ;
	}
	return 0 ;
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