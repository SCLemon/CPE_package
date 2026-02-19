<!DOCTYPE html>
<html>
<head>
<title>uva122</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva122</h1>
<pre class="prettyprint">
//uva122
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
#include &lt;queue&gt;
#include &lt;vector&gt;
#include &lt;string&gt;
#include &lt;cstdio&gt;
#include &lt;iostream&gt;
using namespace std;
const int maxn = 300;
bool failed;
char s[maxn];
struct Node{
    bool have_value;
    int v;
    Node *left, *right;
    Node() : have_value(false), left(NULL), right(NULL) {
    };
};
Node *root;

Node* newnode(){
    return new Node();
}

void addnode(int v, char *s){
    int n = strlen(s);
    Node *u = root;
    for (int i = 0; i &lt; n; i++){
        if (s[i] == &#39;L&#39;){
            if (u-&gt;left == NULL)
                u-&gt;left = newnode();
            u = u-&gt;left;
        }
        else if (s[i] == &#39;R&#39;) {
            if (u-&gt;right == NULL)
                u-&gt;right = newnode();
            u = u-&gt;right;
        }
    }
    if (u-&gt;have_value)
        failed = true;
    u-&gt;v = v;
    u-&gt;have_value = true;
}

void remove_tree(Node *u) {
    if (u == NULL)
        return;
    remove_tree(u-&gt;left);
    remove_tree(u-&gt;right);
    free(u);
}

bool read_input() {
    failed = false;
    remove_tree(root);
    root = newnode();
    while (1) {
        if (scanf(&quot;%s&quot;, s) != 1)
            return false;
        if (!strcmp(s, &quot;()&quot;))
            break;
        int v;
        sscanf(&amp;s[1], &quot;%d&quot;, &amp;v);
        addnode(v, strchr(s, &#39;,&#39;) + 1);
    }
    return true;
}

int n = 0;
vector&lt;int&gt; ans;
bool bfs() {
    queue&lt;Node *&gt; q;
    ans.clear();
    q.push(root);
    while (!q.empty()) {
        Node* u = q.front();
        q.pop();
        if (!u-&gt;have_value)
            return false;
        ans.push_back(u-&gt;v);
        n++;
        if (u-&gt;left != NULL)
            q.push(u-&gt;left);
        if (u-&gt;right != NULL)
            q.push(u-&gt;right);
    }
    return true;
}

int main() {
    while (read_input()) {
        if (!bfs())
            failed = 1;
        if (failed)
            printf(&quot;not complete\n&quot;);
        else {
            for (int i = 0; i &lt; ans.size() - 1; i++)
                printf(&quot;%d &quot;, ans[i]);
            printf(&quot;%d\n&quot;, ans[ans.size() - 1]);
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