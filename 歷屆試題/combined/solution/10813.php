<!DOCTYPE html>
<html>
<head>
<title>uva10813</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>ç¯„ä¾‹ç¨‹å¼ç¢¼ uva10813</h1>
<pre class="prettyprint">
//uva10813
#include &lt;bits/stdc++.h&gt;
using namespace std;

int table[5][5];    // 5*5 ªº°}¦C¡A¼Ğ¬°¼Æ¦r®Éªí¥ÜÁÙ¨S³Q¥s¨ì¸¹¡A­Y³Q¥s¨ì¸¹¡A«h§â¸Ó¦ì¸m¼Ğ¬° -1
int input[75];      // Åª¶i¥s¸¹¶¶§Çªº°}¦C

// ÀË¬d°}¦C¤¤¬O§_¦³³s½u¡A±q ( ii, jj ) ¬°°_ÂI¡A¬O§_¦³¦P¤@¦æ¡A¦P¤@¦C¡A¦P¤@¹ï¨¤½u¡A²Ö¿nº¡¤­­Ó -1
bool check(int ii, int jj){
    int a1 = 0, a2 = 0, a3 = 0, a4 = 0;
    for(int i=0;i&lt;5;i++){
        for(int j=0;j&lt;5;j++){
            if(table[i][j]==-1){
                if(i==ii)       a1++;   // ¦P¤@¦æ
                if(j==jj)       a2++;   // ¦P¤@¦C
                if(i+j==ii+jj)  a3++;   // ¦¸¹ï¨¤½u
                if(i-j==ii-jj)  a4++;   // ¥D¹ï¨¤½u
            }
        }
    }
    if(a1==5||a2==5||a3==5||a4==5)  return true;    // ²Ö¿nº¡¤­­Ó¡A«h¦³³s½u
    else                            return false;   // §_«h¡A¨S¦³³s½u
}

//¦pªG id ¦³¥X²{¦b 5*5 °}¦C¤¤¡A«h§â¸Ó¦ì¸m±q id ¼Ğ¬° -1¡A±µµÛ©I¥s check ¡AÀË¬d¬O§_¦³³s½u²£¥Í
bool mark(int id){
    for(int i=0;i&lt;5;i++){
        for(int j=0;j&lt;5;j++){
            if(table[i][j]==id){
                table[i][j]=-1;
                return check(i,j);
            }
        }
    }
    return false;
}

int main(){
freopen(&quot;l.txt&quot;,&quot;w&quot;,stdout);
    int test = 0;
    cin&gt;&gt;test;
    while(test--){      // ¨C¤@²Õ´ú¸ê¡AÅª¤J´Ñ½L¡A¥H¤Î 75 ­Ó¼Æ¦rªº¥s¸¹¶¶§Ç
        // Åª¤J 5*5 °}¦C
        memset(table, 0, sizeof(table));
        table[2][2] = -1;
        for(int i=0;i&lt;5;i++){
            for(int j=0;j&lt;5;j++){
                if(i==2&amp;&amp;j==2)  continue;
                cin&gt;&gt;table[i][j];
            }
        }

        // Åª¤J¥s¸¹¶¶§Ç
        for(int i=0;i&lt;75;i++)   cin&gt;&gt;input[i];

        // ®Ú¾Ú 5*5 °}¦C¤Î¥s¸¹¶¶§Ç¡A§PÂ_²Ä´X¦^¦X¶}©l¥X²{³s½u
        for(int i=0;i&lt;75;i++){
            if(mark(input[i])){
                printf(&quot;BINGO after %d numbers announced\n&quot;,i+1);
                break;
            }
        }
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