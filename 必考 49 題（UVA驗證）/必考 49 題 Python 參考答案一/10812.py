
# UVa 10812 - Beat the Spread!
def solve(sums, different):
    if different > sums: return 'impossible'

    '''
        x + y = 40
        x - y = 20

        2y = 20
        y = 10
        x = 30
    '''
    y = (sums - different) / 2
    x = (sums + different) / 2 

    if not (y == int(y)): # [or use isinstance(y, float)]
        return 'impossible' # float
    return f'{int(x)} {int(y)}'

T = int(input())
for t in range(T):
    sums, different = list(map(int, input().split()))
    print(solve(sums, different))
# Accepted	PYTH3	0.020