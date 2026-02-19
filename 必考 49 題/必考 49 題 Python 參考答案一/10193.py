
# UVa 10193 - All You Need Is Love
import math
def solve(s, l):
    s, l = int(s, 2), int(l, 2)
    if math.gcd(s, l) > 1:
        return 'All you need is love!'
    return 'Love is not all you need!'

T = int(input())
for t in range(T):
    s = input()
    l = input()
    print(f'Pair #{t+1}: {solve(s, l)}')
# Accepted	PYTH3	0.050