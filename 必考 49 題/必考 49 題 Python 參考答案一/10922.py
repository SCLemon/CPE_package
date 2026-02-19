
# UVa 10922 - 2 the 9s
def solve(n):
    degree = 0
    temp = list(map(int, n))
    while True:
        # print(n)
        sums = sum(temp)
        if sums % 9 == 0:
            temp = list(map(int, str(sums)))
            degree += 1
        else:
            return f'{n} is not a multiple of 9.'
        
        if len(temp) == 1: break # for '9'

    return f'{n} is a multiple of 9 and has 9-degree {degree}.'

while True:
    try:
        n = input()
        if n == '0': break
        print(solve(n))
    except EOFError:
        break
# Accepted	PYTH3	0.390