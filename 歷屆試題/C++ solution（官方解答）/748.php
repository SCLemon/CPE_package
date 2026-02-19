<!DOCTYPE html>
<html>
<head>
<title>uva748</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>範例程式碼 uva748</h1>
<pre class="prettyprint">
//uva748
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;math.h&gt;
#define SIZE 150

char *reverse(char *s1) {
	int i, count = 0;
	char *result = strdup(s1);
	for (i = (int)strlen(s1) - 1; i &gt;= 0; i--) {
		result[count] = s1[i];
		count++;
	}
	result[count] = &#39;\0&#39;;
	return result;
}

char *multiplication(char *m1, char *m2) {
	char *s1 = reverse(m1);
	char *s2 = reverse(m2);
	int length1 = (int) strlen(m1);
	int length2 = (int) strlen(m2);
	int result_length = 0;
	int i, j;
	int d1, d2, mul, overflow = 0, sum = 0;
	char *result = (char *) malloc (sizeof(char) * (length1 + length2 + 2));
	char *returned;
	
	for (i = 0; i &lt; length1 + length2; i++)
		result[i] = &#39;0&#39;;
	result[length1 + length2] = &#39;\0&#39;;
	result_length = (int) strlen(result);
	
	for (i = 0; s1[i] != &#39;\0&#39;; i++) {
		overflow = 0;
		for (j = 0; s2[j] != &#39;\0&#39;; j++) {
			d1 = s1[i] - &#39;0&#39;;
			d2 = s2[j] - &#39;0&#39;;
			mul = d1 * d2;
			
			sum = overflow + mul + (result[i + j] - &#39;0&#39;);
			result[i + j] = (sum % 10) + &#39;0&#39;;
			overflow = sum / 10;
		}
		if (overflow &gt; 0) {
			result[i + j] = (overflow % 10) + &#39;0&#39;;
			if (i + j &gt;= result_length) {
				result_length++;
				result[result_length] = &#39;\0&#39;;
			}
		}
		if (overflow &gt; 10) {
			result[i + j + 1] = (overflow / 10) + &#39;0&#39;;
			if (i + j + 1 &gt;= result_length) {
				result_length++;
				result[result_length] = &#39;\0&#39;;
			}
		}
	}
	free(s1);
	free(s2);
	
	returned = reverse(result);
	free(result);
	
	return returned;
}
char *trimchar(char *str, char c) {
	char *end;
	
	while(*str == c)
		str++;
	
	if(*str == 0)
		return str;
	
	end = str + strlen(str) - 1;
	while(end &gt; str &amp;&amp; *end == c)
		end--;
	
	*(end + 1) = 0;
	
	return str;
}

/*Given R and n, compute the result of R^n in string type*/
char *Exponentiation(double R, int n) {
	char RString[SIZE], *decimalString;
	char uintString[SIZE];
	char *temp, *result, multiplicand[SIZE];
	char returned[SIZE] = {0};
	int digitCount = 0;
	int i, count = 0;
	int flag = 0;
	
	sprintf(RString, &quot;%lf&quot;, R);		/*print R to a string*/
	decimalString = trimchar(RString, &#39;0&#39;);  /*trim the zero character*/
	
	/*Compute the count of decimal digits for the fraction part.*/
	for (i = 0; decimalString[i] != &#39;\0&#39;; i++) {
		if (decimalString[i] == &#39;.&#39;)
			flag = 1;   /*When the decimal point is encuontered*/
		else {
			if (flag == 1)
				digitCount++;
			uintString[count++] = decimalString[i];
		}
	}
	uintString[count] = &#39;\0&#39;;
	
	strcpy(multiplicand, uintString);
	for (i = 1; i &lt; n; i++) {
		temp = multiplication(multiplicand, uintString);
		strcpy(multiplicand, temp);
		free(temp);
	}
	result = multiplicand;
	
	strncpy(returned, result, strlen(result) - digitCount * n);
	if (digitCount &gt; 0) {
		strcat(returned, &quot;.&quot;);
		strcat(returned, result + (strlen(result) - digitCount * n));
	}
	return strdup(trimchar(returned, &#39;0&#39;));
}

int main(void) {
	double R;
	int n;
	char *result;
	
	while (fscanf(stdin, &quot;%lf%d&quot;, &amp;R, &amp;n) != EOF) {
		result = Exponentiation(R, n);
		printf(&quot;%s\n&quot;, result);
		free(result);
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