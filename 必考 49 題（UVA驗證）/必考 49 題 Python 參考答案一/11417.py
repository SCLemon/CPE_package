
# UVa 11417 - GCD
import math
def solve(n):
    g = 0
    for i in range(1, n):
        for j in range(i+1, n+1):
            g += math.gcd(i, j)
            # g += gcd(i, j)
    return g

def gcd(a, b):
    # Accepted	PYTH3	1.410
    while b:
        a, b = b, a % b
    return a

while True:
    try:
        n = int(input())
        if n == 0: break

        print(solve(n))
    except EOFError:
        break
# Accepted	PYTH3	0.820