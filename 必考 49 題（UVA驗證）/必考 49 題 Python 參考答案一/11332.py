
# UVa 11332 - Summing Digits
def solve(n):
    ans = n
    n = list(map(int, n))
    while len(n) > 1:
        ans = sum(n)
        n = list(map(int, str(ans)))
    return ans

def solve2(n):
    n = int(n)
    if n == 0: return 0
    if n % 9 == 0: return 9
    return n % 9
while True:
    try:
        n = input()
        if n == '0': break
        print(solve2(n))
    except EOFError:
        break
# Accepted	PYTH3	0.020