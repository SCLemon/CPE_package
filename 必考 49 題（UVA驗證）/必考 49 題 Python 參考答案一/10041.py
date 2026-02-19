

# UVa 10041 - Vito's Family
def solve(n, nums):
    nums.sort()
    mid = nums[n//2]
    ans = 0
    for i in nums:
        ans += abs(i - mid)
    return ans

T = int(input())
for t in range(T):
    n = list(map(int, input().split()))
    print(solve(n[0], n[1:]))
# Accepted	PYTH3	0.040
