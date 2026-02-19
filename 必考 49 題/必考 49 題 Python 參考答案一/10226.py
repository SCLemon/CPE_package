
# 10226 - Hardwood Species
from collections import Counter
import sys
def solve(trees):
    if t != 0: print()

    count = {}
    for tree in trees:
        count[tree] = count.get(tree, 0) + 1
    n = len(trees)

    ''' attempt 2 TLE '''
    ans = sorted(count.keys())
    ans = [f'{key} {count[key] / n * 100:.4f}' for key in ans]
    return '\n'.join(ans)

    ''' attempt 1 TLE '''
    ans = sorted([[tree, f'{round(amount / n * 100, 4):.4f}'] for tree, amount in count.items()], key=lambda x: x[0])
    return '\n'.join([f'{tree} {amount}' for tree, amount in ans])

def solve2(trees):
    count = Counter(trees)
    n = len(trees)
    
    ans = {k: count[k] for k in sorted(count)}
    ans = [f'{key} {count[key] / n * 100:.4f}' for key in ans]
    return '\n'.join(ans)

T = int(input())
for t in range(T):
    trees = []
    if t == 0: input()
    if t != 0: print()
    while True:
        try:
            # tree = input()
            tree = sys.stdin.readline().strip() # bruh
            if tree: 
                trees.append(tree)
            else: 
                print(solve2(trees))
                break
        except EOFError:
            # print(solve(trees))
            print(solve2(trees))
            break
# Attempt ???: OnlineJudge: Accepted	PYTH3	1.840
# Attempt 1:   OnlineJudge: Time limit exceeded	PYTH3	3.000
# ZeroJudge: AC (5.2s, 76.1MB)