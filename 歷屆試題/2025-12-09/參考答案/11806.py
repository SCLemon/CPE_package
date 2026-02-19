import sys

MOD = 1000007
MAX = 500  # R*C 最大 400

# 預算組合數
fact = [1]*(MAX+1)
inv = [1]*(MAX+1)

for i in range(1, MAX+1):
    fact[i] = fact[i-1]*i

def comb(n, k):
    if k < 0 or k > n:
        return 0
    return fact[n] // (fact[k]*fact[n-k])

t = int(sys.stdin.readline())

for case in range(1, t+1):
    R, C, K = map(int, sys.stdin.readline().split())
    
    ans = 0
    
    # 16 種子集合
    for mask in range(16):
        r = R
        c = C
        
        bits = 0
        
        # 上邊
        if mask & 1:
            r -= 1
            bits += 1
        # 下邊
        if mask & 2:
            r -= 1
            bits += 1
        # 左邊
        if mask & 4:
            c -= 1
            bits += 1
        # 右邊
        if mask & 8:
            c -= 1
            bits += 1
        
        if r < 0 or c < 0:
            continue
        
        cells = r * c
        ways = comb(cells, K)
        
        if bits % 2 == 0:
            ans += ways
        else:
            ans -= ways
    
    ans %= MOD
    print(f"Case {case}: {ans}")
