<!DOCTYPE html>
<html>
<head>
<title>uva657</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva657</h1>
<pre class="prettyprint">
//uva657
#include &lt;iostream&gt;
#include &lt;cstring&gt;
#include &lt;algorithm&gt;
#define MAX 50

using namespace std;

int row, col, ansNum, caseNum = 1;
int ans[MAX * MAX], pathStar[MAX][MAX], pathX[MAX][MAX];
int dir[4][2] = {{0, 1}, {1, 0}, {-1, 0}, {0, -1}};
char picture[MAX][MAX];

// use DFS to check the dice point
void findX(int i, int j) {
    // DFS at leaf point
    if(pathX[i][j] == 1)
        return;

    for(int k = 0; k &lt; 4; k++)
    {
        // out of range
        if(i + dir[k][0] &lt; 0 || i + dir[k][0] &gt;= row)
            continue;
        if(j + dir[k][1] &lt; 0 || j + dir[k][1] &gt;= col)
            continue;

        // not &#39;X&#39;
        if(picture[i + dir[k][0]][j + dir[k][1]] != &#39;X&#39;)
            continue;

        // has find before
        if(pathX[i + dir[k][0]][j + dir[k][1]] == 1)
            continue;

        // set this point has been check
        pathX[i][j] = 1;

        // find next point
        findX(i + dir[k][0], j + dir[k][1]);
    }

    // set this point has been check
    pathX[i][j] = 1;
}

// use DFS to check the dice
void findStar(int i, int j) {
    // DFS at leaf point
    if(pathStar[i][j] == 1)
        return;

    for(int k = 0; k &lt; 4; k++) {
        // out of range
        if(i + dir[k][0] &lt; 0 || i + dir[k][0] &gt;= row)
            continue;
        if(j + dir[k][1] &lt; 0 || j + dir[k][1] &gt;= col)
            continue;

        // not &#39;*&#39;
        if(picture[i + dir[k][0]][j + dir[k][1]] == &#39;.&#39;)
            continue;

        // has find before
        if(pathStar[i + dir[k][0]][j + dir[k][1]])
            continue;

        // we need to check
        if(picture[i + dir[k][0]][j + dir[k][1]] != &#39;.&#39;) {
            // find the dice point and use DFS to check that point
            if(picture[i + dir[k][0]][j + dir[k][1]] == &#39;X&#39; &amp;&amp; pathX[i + dir[k][0]][j + dir[k][1]] == 0) {
                // find the dice point
                ans[ansNum]++;

                // use DFS to check that dice point
                findX(i + dir[k][0], j + dir[k][1]);
            }

            // set this point has been check
            pathStar[i][j] = 1;

            // find next point
            findStar(i + dir[k][0], j + dir[k][1]);
        }
    }

    // set this point has been check
    pathStar[i][j] = 1;
}

int main() {
    // get first input
    cin &gt;&gt; col &gt;&gt; row;

    while(row != 0 &amp;&amp; col != 0) {
        // get picture
        for(int i = 0; i &lt; row; i++)
            cin &gt;&gt; picture[i];

        // initialize
        ansNum = 0;
        memset(pathStar, 0, sizeof(pathStar));
        memset(pathX, 0, sizeof(pathX));
        memset(ans, 0, sizeof(ans));

        // find how many dices (the first star position)
        for(int i = 0; i &lt; row; i++) {
            for(int j = 0; j &lt; col; j++) {
                if(picture[i][j] != &#39;.&#39; &amp;&amp; pathStar[i][j] == 0) {
                    findStar(i, j);

                    // the first &#39;X&#39; haven&#39;t count
                    if(picture[i][j] == &#39;X&#39;)
                        ans[ansNum]++;

                    ansNum++;
                }
            }
        }

        // sort the answer
        sort(ans, ans + ansNum);

        // output the answer
        cout &lt;&lt; &quot;Throw &quot; &lt;&lt; caseNum &lt;&lt; endl;
        for(int i = 0; i &lt; ansNum - 1; i++)
            cout &lt;&lt; ans[i] &lt;&lt; &#39; &#39;;
        cout &lt;&lt; ans[ansNum - 1] &lt;&lt; endl &lt;&lt; endl;

        // get next input
        cin &gt;&gt; col &gt;&gt; row;
        caseNum++;
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