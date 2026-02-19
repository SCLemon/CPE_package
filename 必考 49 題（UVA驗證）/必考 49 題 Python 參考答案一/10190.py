
def solve(m, n):
    if m == 0 or n == 0 or m == 1 or n == 1: return 'Boring!' 
    ans = [m]
    while m > 1:
        if m % n != 0: return 'Boring!'
        ans.append(m // n)
        m //= n
    return ' '.join([str(i) for i in ans])

# UVa 10190 - Divide, But Not Quite Conquer!
while True:
    try:
        m, n = list(map(int, input().split()))

        print(solve(m, n))
    except EOFError:
        break