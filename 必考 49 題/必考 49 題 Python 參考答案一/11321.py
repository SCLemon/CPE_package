
# UVa 11321 - Sort! Sort!! and Sort!!!
def solve(n, m, nums):
    '''
        1. 數字按照它們除以 M 的餘數升序排列。
        2. 如果兩個數的餘數相同，奇數要排在偶數前面。
        3. 如果兩個數的餘數相同且都是奇數，則數值較大的排在前面。
        4. 如果兩個數的餘數相同且都是偶數，則數值較小的排在前面。
    '''
    # https://stackoverflow.com/a/46969300
    # def mod(a, b):  
    #     return abs(a)%abs(b)*(1,-1)[a<0]
    def mod(a, b):
        result = abs(a) % abs(b)  # 先計算絕對值的模
        if a < 0:
            result *= -1  # 如果 a 是負數，使結果為負
        return result
    def sort_key(x):
        return (mod(x, m), x % 2 == 0, -x if x % 2 != 0 else x)

    ans = sorted(nums, key=sort_key)
    # ans = sorted(nums, key=lambda x: (mod(x, m), x % 2 == 0, -x if x % 2 != 0 else x)) # 用 lambda 也可以
    return '\n'.join(map(str, ans)) 

while True:
    n, m = list(map(int, input().split()))
    print(f'{n} {m}')
    if n == 0 and m == 0: break
    nums = []
    for i in range(n):
        nums.append(int(input()))

    print(solve(n, m, nums))
# Accepted	PYTH3	1.160