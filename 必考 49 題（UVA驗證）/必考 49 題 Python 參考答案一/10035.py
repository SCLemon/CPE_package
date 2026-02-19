
# UVa 10035 - Primary Arithmetic
# 2023/03/21/ CPE - 1

def solve(n1, n2):
    count = carry = 0
    while n1 > 0 or n2 > 0:
        carry = 1 if n1 % 10 + n2 % 10 + carry >= 10 else 0
        count += carry
        n1 //= 10
        n2 //= 10
    end = 's' if count > 1 else ''
    return 'No carry operation.' if count == 0 else f'{ count } carry operation{ end }.'
    
while True:
    try:
        n1, n2 = list(map(int, input().split()))
        if n1 == 0 and n2 == 0: break
        print(solve(n1, n2))
    except EOFError:
        break
# Accepted	PYTH3	0.060