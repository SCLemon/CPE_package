
def solve(n, nums):
    count = 0
    for i in range(n-1):
        for j in range(n-i-1):
            if nums[j] > nums[j+1]:
                nums[j], nums[j+1] = nums[j+1], nums[j]
                count += 1
    return f'Optimal train swapping takes {count} swaps.'

T = int(input())
for t in range(T):
    n = int(input())
    nums = list(map(int, input().split()))

    print(solve(n, nums))
