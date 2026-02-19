
# UVa 10642 - Can You Solve It?
def solve(x1, y1, x2, y2):
    level_1 = x1 + y1
    startNum_1 = ((1 + (level_1)) * (level_1)) // 2
    num_1 = startNum_1 + x1

    level_2 = x2 + y2
    startNum_2 = ((1 + (level_2)) * (level_2)) // 2
    num_2 = startNum_2 + x2

    return num_2 - num_1

T = int(input())
for t in range(T):
    x1, y1, x2, y2 = list(map(int, input().split()))
    print(f'Case { t+1 }: {solve(x1, y1, x2, y2)}')
# Accepted	PYTH3	0.020