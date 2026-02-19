<!DOCTYPE html>
<html>
<head>
<title>uva11917</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva11917</h1>
<pre class="prettyprint">
//uva11917
#include &lt;iostream&gt;
#include &lt;string&gt;
#include &lt;map&gt;

using namespace std;

int main() {
    int caseNum, listNum, useDay, limitDay;
    string useCourse, limitCourse;
    map&lt;string, int&gt; myList;

    // get case number
    cin &gt;&gt; caseNum;
    for(int i = 0; i &lt; caseNum; i++) {
        // initialize
        myList.clear();

        // get number of schedule
        cin &gt;&gt; listNum;
        for(int j = 0; j &lt; listNum; j++) {
            // get schedule
            cin &gt;&gt; useCourse &gt;&gt; useDay;

            // put into map
            myList[useCourse] = useDay;
        }

        // get limit day and course
        cin &gt;&gt; limitDay &gt;&gt; limitCourse;

        // output
        cout &lt;&lt; &quot;Case &quot; &lt;&lt; i + 1 &lt;&lt; &quot;: &quot;;
        if(myList.find(limitCourse) == myList.end()) {
            // the course is not in the schedule
            cout &lt;&lt; &quot;Do your own homework!&quot; &lt;&lt; endl;
        }
        else if(myList[limitCourse] &lt;= limitDay) {
            // finished on the limit day
            cout &lt;&lt; &quot;Yesss&quot; &lt;&lt; endl;
        }
        else if(myList[limitCourse] &lt;= (limitDay + 5)) {
            // finished over than limit day but not over than 5 days
            cout &lt;&lt; &quot;Late&quot; &lt;&lt; endl;
        }
        else {
            // finished over than limit day + 5
            cout &lt;&lt; &quot;Do your own homework!&quot; &lt;&lt; endl;
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