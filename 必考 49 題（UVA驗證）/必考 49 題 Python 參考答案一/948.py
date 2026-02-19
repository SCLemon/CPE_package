
# UVa 948 - Fibonaccimal Base
def getFib():
    fibs = [0] * 50
    fibs[0], fibs[1] = 1, 1 
    for i in range(2, len(fibs)):
        fibs[i] = fibs[i-1] + fibs[i-2]
    return fibs

def solve(n):
    ans = ''
    temp = n
    for i in fibs[::-1]:
        if temp >= i:
            ans += '1'
            temp -= i
        elif ans:
            ans += '0'
    return f'{n} = {ans[:-1]} (fib)'

fibs = getFib()

T = int(input())
for t in range(T):
    n = int(input())
    print(solve(n))
# Accepted	PYTH3	0.020