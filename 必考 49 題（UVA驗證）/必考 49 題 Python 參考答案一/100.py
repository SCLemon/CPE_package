
'''
1. input n
2. print n
3. if n = 1 then STOP
4. if n is odd then n ←− 3n + 1
5. else n ←− n/2
6. GOTO 2
'''

appeared = {}

def solve(i, j):
    count = ans = 0
    for cur in range(min(i, j), max(i, j)+1):
        count = 0
        n = cur
        while True:
            if n in appeared: 
                count += appeared[n]
                break

            count += 1
            if n == 1: break
            if n % 2 != 0: n = 3 * n + 1
            else: n = n // 2
        
        appeared[cur] = count
        ans = max(count, ans)

    return f'{i} {j} {ans}'

while True:
    try:
        i, j = list(map(int, input().split()))
        print(solve(i, j))
    except EOFError:
        break