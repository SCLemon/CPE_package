
# UVa 10057 - A mid-summer night's dream.
def solve(n, nums):
    nums.sort()
    mid1, mid2 = n // 2, n // 2 - 1
    if n % 2 == 0:
        if nums[mid1] == nums[mid2]:
            return f'{min(nums[mid1], nums[mid2])} {nums.count(nums[mid1])} {nums[mid1] - nums[mid2] + 1}'
        return f'{min(nums[mid1], nums[mid2])} {nums.count(nums[mid1]) + nums.count(nums[mid2])} {nums[mid1] - nums[mid2] + 1}'
    return f'{nums[mid1]} {nums.count(nums[mid1])} 1'

while True:
    try:
        n = int(input())
        nums = []
        for i in range(n):
            nums.append(int(input()))

        print(solve(n, nums))
    except EOFError:
        break
# Accepted	PYTH3	5.410