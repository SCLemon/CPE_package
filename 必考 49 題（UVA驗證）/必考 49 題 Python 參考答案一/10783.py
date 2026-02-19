
# UVa UVa 10783 - Odd Sum
def solve(n1, n2):
    ans = 0
    for i in range(n1, n2+1):
        if i % 2 != 0:
            ans += i
    return ans

T = int(input())
for t in range(T):
    n1 = int(input())
    n2 = int(input())
    
    print(f'Case {t+1}: {solve(n1, n2)}')
# Accepted	PYTH3	0.020