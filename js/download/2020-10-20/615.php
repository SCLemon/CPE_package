<!DOCTYPE html>
<html>
<head>
<title>uva615</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva615</h1>
<pre class="prettyprint">
//uva615
#include&lt;iostream&gt;
#include&lt;vector&gt;
using namespace std ;
int main(){

    int father[100001];
    int x,y;
    int tmp;
    int root = -1;
    int Case = 1 ;
    bool is_tree = true ;

    for(int i=0 ; i&lt;100001 ;i++) father[i] = -1 ;

    while(cin&gt;&gt;x&gt;&gt;y){

        //over
        if(x&lt;=-1 &amp;&amp; y&lt;=-1)  return 0 ;
        //Case over
        if(x==0 &amp;&amp; y==0) {

            for(int i=0 ; i&lt;100001 ;i++){

                if(root == -1 &amp;&amp; father[i] != -1) root = father[i] ;
                else if (father[i] !=-1 &amp;&amp; father[i] != root) is_tree= false ;
            }
			
            if(is_tree == false) cout&lt;&lt;&quot;Case &quot;&lt;&lt;Case&lt;&lt;&quot; is not a tree.&quot;&lt;&lt;endl;
            //for uva judgement          
            //else cout&lt;&lt;&quot;Case &quot;&lt;&lt;Case&lt;&lt;&quot; is a tree.&quot;&lt;&lt;endl;
            //
            
            //for cpe
            else cout&lt;&lt;&quot;Case &quot;&lt;&lt;Case&lt;&lt;&quot; is a tree. Root is &quot;&lt;&lt;root&lt;&lt;&quot;.&quot;&lt;&lt;endl;
            //
            
            Case++;
            //initialize
            root = -1;
            is_tree = true ;
            for(int i=0 ; i&lt;100001 ;i++) father[i] = -1 ;

        }
        else{

            //more than one parents
            if(father[y]!= -1) is_tree= false ;
            //cycle
            if(x==y) is_tree= false;

            if(father[x] != -1) tmp = father[x] ;
            else tmp = x ;

            //cycle
            if(father[x] == y) is_tree= false ;
            else if(father[y] == -1) father[y] = tmp ;

            for(int i=0 ; i&lt;100001 ;i++) if(father[i]== y) father[i] = tmp ;
        }

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