
# 10056 - What is the Probability ?
def solve(n, p, target):
    if p == 0: return f'{0:.4f}'
    q = (1 - p)
    return f'{p * (q ** (target - 1) / (1 - q ** n)):.4f}'

T = int(input())
for t in range(T):
    n, p, target = input().split()
    print(solve(int(n), float(p), int(target)))
# Accepted	PYTH3	0.010