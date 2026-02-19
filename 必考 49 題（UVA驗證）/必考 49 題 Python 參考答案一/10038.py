
# UVa 10038 - Jolly Jumpers
def solve(n, nums):
    jollies = sorted([abs(nums[i] - nums[i-1]) for i in range(1, n)])
    for i in range(1, n):
        if jollies[i-1] != i: 
            return 'Not jolly'
    return 'Jolly'

while True:
    try:
        nums = list(map(int, input().split()))
        print(solve(nums[0], nums[1:]))
    except EOFError:
        break
# Accepted	PYTH3	0.010