
# UVa 11349 - Symmetric Matrix
def solve(n, matrix):
    for i in matrix:
        if i < 0: return 'Non-symmetric.'
    return 'Symmetric.' if matrix == matrix[::-1] else 'Non-symmetric.'

T = int(input())
for t in range(T):
    n = int(input().split()[-1])
    matrix = []
    for i in range(n):
        matrix.extend(list(map(int, input().split())))

    print(f'Test #{t+1}: {solve(n, matrix)}')
# Accepted	PYTH3	0.280