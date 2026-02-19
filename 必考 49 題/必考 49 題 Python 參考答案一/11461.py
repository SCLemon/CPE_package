
# UVa 11461 - Square Numbers
import math
def solve(n1, n2):
    # Time limit exceeded	PYTH3	1.000
    ans = 0
    for i in range(n1, n2+1):
        # sqrt = int(i ** (0.5))
        sqrt = math.sqrt(i)
        if i == sqrt * sqrt: 
            ans += 1
    return ans

def solve2(n1, n2):
    sqrt_n1, sqrt_n2 = int(math.sqrt(n1)), int(math.sqrt(n2))
    if sqrt_n1 * sqrt_n1 == n1:
        return sqrt_n2 - sqrt_n1 + 1
    else:
        return sqrt_n2 - sqrt_n1

while True:
    try:
        n1, n2 = list(map(int, input().split()))
        if n1 == 0 and n2 == 0: break
        # print(solve(n1, n2))
        print(solve2(n1, n2))
    except EOFError:
        break
# Accepted	PYTH3	0.010