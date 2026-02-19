
# UVa 10268 - 498-bis

def solve(x, nums):
    ans = 0
    n = len(nums) - 1
    for i in range(n, 0, -1):  # 從 n-1 開始遞減到 1
        ans = ans * x + i * nums[n - i]
    return ans

while True:
    try:
        x = int(input())
        nums = list(map(int, input().split()))

        print(solve(x, nums))
    except EOFError:
        break
# 	Accepted	PYTH3	0.080