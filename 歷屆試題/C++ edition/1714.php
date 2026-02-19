<!DOCTYPE html>
<html>
<head>
<title>uva1714</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1714</h1>
<pre class="prettyprint">
//uva1714
#include &lt;iostream&gt;
#include &lt;map&gt;
#include &lt;cstring&gt;
#include &lt;string&gt;
#include &lt;utility&gt;
#include &lt;algorithm&gt;
#include &lt;cmath&gt;
#include &lt;map&gt;
#include &lt;queue&gt;

using namespace std;

char board[64][64]; //keyboard 
char query_string[10001]; //input string
int len_q; //len of query_string

int nex[64][64][4][2];
int visitCount[64][64];
int R, C;
const int dx[4] = {0, 0, 1, -1}; //row offset
const int dy[4] = {1, -1, 0, 0}; //col offset
int answer = 0;

//BFS node
class Node {	
	public:
		int x,y; //row,col
		int cc_q; //count for input string 
		int nstep; //number of steps of keyboard 
};


//build table of next move positions
//for example: &quot;aaab&quot;, [0]&#39;s next move is [3]
//in case of out of range position, record -1 
void build_next_table()
{
    for(int i=0;i&lt;R;i++) {
        for(int j=0;j&lt;C;j++) {
            for(int k=0;k&lt;4;k++) //four directions
            {
				//find next different char in direction k
                //note: for the case of out of range, next=-1                

                int x=i+dx[k];
                int y=j+dy[k];

                //out of range
                if(x&lt;0||x&gt;=R||y&lt;0||y&gt;=C) {
                    nex[i][j][k][0]=-1; 
                    nex[i][j][k][1]=-1;
                    continue;
                }

                int flag_out = 0;
                
                while(board[i][j]==board[x][y]) { 
					x+=dx[k];
					y+=dy[k];
                    
                    if(x&lt;0||x&gt;=R||y&lt;0||y&gt;=C) {
                        flag_out = 1;
                        break;
                    }
				}

                if(flag_out) {
                    nex[i][j][k][0]=-1; 
                    nex[i][j][k][1]=-1;
                } else {
                    nex[i][j][k][0]=x; 
                    nex[i][j][k][1]=y;
                }
            }
        }
    }
}

void print_nex() {
    for(int i=0;i&lt;R;i++) {
        for(int j=0;j&lt;C;j++) {
            for(int k=0;k&lt;4;k++) //four directions
            {
                cout &lt;&lt; &quot;R,C[&quot; &lt;&lt; i &lt;&lt; &quot;,&quot; &lt;&lt; j &lt;&lt; &quot;]=(&quot; &lt;&lt; nex[i][j][k][0] &lt;&lt; &quot;,&quot; &lt;&lt; nex[i][j][k][1] &lt;&lt; &quot;)&quot; &lt;&lt; &quot;board=&quot; &lt;&lt; board[i][j] &lt;&lt; endl;
            }
        }
    }
}
/*
void print_visitCount() {
    for(int i=0;i&lt;R;i++) {
        for(int j=0;j&lt;C;j++) {
            cout &lt;&lt; visitCount[i][j] &lt;&lt; &quot;(&quot; &lt;&lt; &quot;&quot; &lt;&lt; board[i][j] &lt;&lt; &quot;) &quot;;
        }
        cout &lt;&lt; endl;
    }
    cout &lt;&lt; endl;
}
*/
void clear_visitCount() {
    for(int i=0;i&lt;R;i++) {
        for(int j=0;j&lt;C;j++) {
            visitCount[i][j]  = -1;
        }
    }
}

void print_queue_node(Node &amp;v) {

    cout &lt;&lt; v.x &lt;&lt; &quot;,&quot; &lt;&lt; v.y &lt;&lt; &quot;(&quot; &lt;&lt; board[v.x][v.y] &lt;&lt; &quot;)&quot; &lt;&lt; v.cc_q &lt;&lt; &quot;(&quot; &lt;&lt; query_string[v.cc_q] &lt;&lt; &quot;)&quot; &lt;&lt; v.nstep &lt;&lt; endl;

}


int BFS()
{
	queue &lt;Node&gt; q;
    Node v = Node {0,0,0,0};
    q.push(v);//init BFS node, upper left position
    //print_queue_node(v);
    //print_visitCount();

    while(!q.empty())
    {
        Node u = q.front(); 
		q.pop();

        if(board[u.x][u.y]==query_string[u.cc_q])//find the current char in the query string 
        {
            if(u.cc_q==len_q-1)//The search ends if the last char is found.
            {
                answer = u.nstep + 1;//+1 for performing &#39;SEL&#39; on &#39;Enter&#39; key
                return answer;
            }
			u.nstep++;//+1 for performing &#39;SEL&#39; on the current char
            u.cc_q++; //start new point for next char in the query string  
            visitCount[u.x][u.y]=u.cc_q;//record visitCount count
            q.push(u);
            //print_queue_node(u);
			//print_visitCount();
        }
        else //normal BFS
        {
            int x,y;
            for(int k=0;k&lt;4;k++) {
                x=nex[u.x][u.y][k][0]; 
				y=nex[u.x][u.y][k][1];
                
                if(x&lt;0||x&gt;=R||y&lt;0||y&gt;=C) 
					continue; //stop search if out of range
                
                if(visitCount[x][y]&gt;=u.cc_q) 
					continue; //stop search for previous visitCounted position
                
                //generate next level node in direction k
                visitCount[x][y]=u.cc_q;
				Node w = Node{x,y,u.cc_q,u.nstep+1};
                q.push(w);
			    //print_queue_node(w);
            	//print_visitCount();
            }
        }
    }

	return answer;

}

int main() {
	while (scanf(&quot;%d %d&quot;, &amp;R, &amp;C) != EOF) {

        //cout &lt;&lt; si &lt;&lt; endl;


        for (int i = 0; i &lt; R; i++) {
			scanf(&quot;%s&quot;, board[i]);
        	//cout &lt;&lt; board[i] &lt;&lt; endl;
		}
		scanf(&quot;%s&quot;, query_string);
        //cout &lt;&lt; query_string &lt;&lt; endl;
 		
		len_q = strlen(query_string);    
		query_string[len_q]=&#39;*&#39;; //add the last &quot;Enter&quot; key, (=&#39;*&#39;)
        len_q += 1;
        
        //clear visitCount count 
        clear_visitCount();
        build_next_table();
        //print_nex();
        BFS();
        cout&lt;&lt;answer&lt;&lt;endl;		
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