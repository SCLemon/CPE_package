<!DOCTYPE html>
<html>
<head>
<title>uva1101</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva1101</h1>
<pre class="prettyprint">
//uva1101
// uva1101
#include &lt;iostream&gt;
#include&lt;string.h&gt;
#include &lt;math.h&gt; 
#include&lt;algorithm&gt;
#define INF 0x3f3f3f3f
#define MAXN 110
using namespace std;

typedef long long LL;
int A, M, P, Q, R, S;

struct Solution
{
    int s;
	int n; 
	int count[MAXN];
    bool A[MAXN];
    
	bool operator &lt; (const Solution &amp;t) const
    {
		if(s != t.s) return s &lt; t.s;
        
		for(int i=0; i&lt;n; i++){
			if(A[i]&amp;&amp;!t.A[i]) return true;
			if(!A[i]&amp;&amp;t.A[i]) return false;
			if(count[i]!=t.count[i]) 
			    return ((count[i]&gt;t.count[i])&amp;&amp;A[i])||(count[i]&lt;t.count[i]&amp;&amp;!A[i]);       
		}
	}
}optimal_solution;


Solution generate_new_soluiton(int a[], int mn)
{
    Solution new_soluiton;
    new_soluiton.s = mn, new_soluiton.n = 0;
    for(int i = 0, &amp;n = new_soluiton.n; i &lt;= mn; i ++)
    {
        new_soluiton.s += a[i];
        if(a[i] &gt; 0)
        {
            new_soluiton.count[n] = a[i], new_soluiton.A[n] = true;
            ++ n;
        }
        if(i &lt; mn)
        {
            if(n == 0 || new_soluiton.A[n - 1])
            {
                new_soluiton.count[n] = 1, new_soluiton.A[n] = false;
                ++ n;
            }
            else ++ new_soluiton.count[n - 1];
        }
    }
   
 return new_soluiton;
}

void generate_soluiton_with_i_Ms(int mn, int p, int px, int py)
{
    if(p &gt; px) px = p;
    LL sum = ((p - px) % A + A) % A + px;
    if(sum &gt; py) return;
    sum = (sum - p) / A;
    int t = sum, max = (py - p) / A, a[MAXN];
    for(int i = mn; i &gt; 0; i --) a[i] = t % M, t /= M;
    a[0] = t;

    Solution new_solution;
    for(int i = mn, fac = 1; i &gt;= 0; i --, fac *= M)
    {
        new_solution = generate_new_soluiton(a, mn);
        
        if(new_solution &lt; optimal_solution) optimal_solution = new_solution;
       
	   
	    if(i &gt; 0 &amp;&amp; a[i] != 0)
        {
            sum += (LL)(M - a[i]) * fac, a[i] = M;
            if(sum &gt; max) break;
            for(int j = i; j &gt; 0 &amp;&amp; a[j] == M; j --)
                ++ a[j - 1], a[j] = 0;
        }
    }
}


int main()
{
    int rd = 0;

    cin &gt;&gt; A &gt;&gt; M &gt;&gt; P &gt;&gt; Q &gt;&gt; R &gt;&gt; S;
    
	while(!(A==0&amp;&amp;M==0&amp;&amp;P==0&amp;&amp;Q==0&amp;&amp;R==0&amp;&amp;S==0))
	{
    	rd++;
        optimal_solution.s = INF;
        
        LL l = Q - P, p = P;
        for(int i = 0; p &lt;= S - l &amp;&amp; l &lt;= S - R; i++)
        {
            generate_soluiton_with_i_Ms(i, p, R, S - l);
            l *= M;
			p *= M;
			if(M == 1) break;
        }
        
        cout &lt;&lt;&quot;Case &quot;&lt;&lt;rd&lt;&lt;&quot;:&quot;;
        
		if(optimal_solution.s == 0) cout&lt;&lt;&quot; empty&quot;&lt;&lt;endl;  
        else if(optimal_solution.s == INF) cout&lt;&lt;&quot; impossible&quot;&lt;&lt;endl;
        		else
        		{
            		for(int i = 0; i &lt; optimal_solution.n; i ++){
            			cout &lt;&lt; &quot; &quot; &lt;&lt; optimal_solution.count[i];
						if(optimal_solution.A[i]) 
							cout &lt;&lt;&#39;A&#39;;
						else
							cout &lt;&lt;&#39;M&#39;;		
					}
            		cout&lt;&lt;endl;
       			}
        cin &gt;&gt; A &gt;&gt; M &gt;&gt; P &gt;&gt; Q &gt;&gt; R &gt;&gt; S;
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