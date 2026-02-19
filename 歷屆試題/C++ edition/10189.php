<!DOCTYPE html>
<html>
<head>
<title>uva10189</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva10189</h1>
<pre class="prettyprint">
//uva10189
#include &lt;iostream&gt;
using namespace std;
int n,m;
char line[100][101];
int ans[100][100];
int field=0;
void input()
{
   for(int i=0;i&lt;n;i++){
      cin&gt;&gt;line[i];
      for(int j=0;j&lt;m;j++){
         ans[i][j]=0;
      }
   }
}
void MineAddNeighborOne(int i,int j)
{
   for(int ii=i-1;ii&lt;=i+1;ii++){
      for(int jj=j-1;jj&lt;=j+1;jj++){
         if(ii&lt;0||ii&gt;=n||jj&lt;0||jj&gt;=m)
            continue;
         ans[ii][jj]++;
      }
   }
}
void output()
{
   for(int i=0;i&lt;n;i++){
      for(int j=0;j&lt;m;j++){
         if(line[i][j]==&#39;*&#39;){
            MineAddNeighborOne(i,j);
         }
      }
   }
   if(field&gt;1)cout&lt;&lt;endl;
   cout&lt;&lt;&quot;Field #&quot;&lt;&lt;field&lt;&lt;&quot;:&quot;&lt;&lt;endl;
   for(int i=0;i&lt;n;i++){
      for(int j=0;j&lt;m;j++){
         if(line[i][j]==&#39;*&#39;){
            cout&lt;&lt;&#39;*&#39;;
         }else{
            cout&lt;&lt;ans[i][j];
         }
      }
      cout&lt;&lt;endl;
   }
}
int main()
{
   while(cin&gt;&gt;n&gt;&gt;m){
      if(n==0 &amp;&amp; m==0)break;
      input();
      field++;
      output();
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