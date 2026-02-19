
# UVa 10409 - Die Game
def solve(codes):
    # "east"、"south"、"west"、"north"。
    '''
           2
        3  1  4  6
           5
    '''
    north, west, top = 2, 3, 1
    for code in codes:
        if code == 'east':
            north, west, top = north, 7 - top, west
        elif code == 'south':
            north, west, top = 7 - top, west, north
        elif code == 'west':
            north, west, top = north, top, 7 - west
        else: # north
            north, west, top = top, west, 7 - north
    return top

while True:
    try:
        n = int(input())
        if n == 0: break

        codes = []
        for _ in range(n):
            codes.append(input())

        print(solve(codes))
    except EOFError:
        break
# Accepted	PYTH3	0.020