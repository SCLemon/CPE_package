
# UVa 11063 - B2-Sequence
def solve(n, nums):
    for i in range(1, n):
        if nums[i] < 1 or nums[i-1] < 1: return 'It is not a B2-Sequence.'
        if nums[i-1] >= nums[i]: return 'It is not a B2-Sequence.'

    seen = []
    for i in range(n):
        for j in range(i, n):
            if nums[i] + nums[j] in seen: return 'It is not a B2-Sequence.'
            seen.append(nums[i] + nums[j])
    return 'It is a B2-Sequence.'

count = 1
while True:
    try:
        n = int(input())
        nums = list(map(int, input().split()))
        print(f'Case #{count}: {solve(n, nums)}')
        print()
        count += 1
        input()
    except EOFError:
        break
#	Accepted	PYTH3	0.140