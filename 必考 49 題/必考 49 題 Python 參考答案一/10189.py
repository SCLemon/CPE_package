
# UVa 10189 - Minesweeper
def solve(row, col, field):
    checks = [
        # (row, col)
        (-1, -1), # upper left
        (-1, 0), # up
        (-1, 1), # upper right

        (0, -1), # left
        (0, 1), # right

        (1, -1), # down left
        (1, 0), # down
        (1, 1), # down right 
    ]

    ans = [[0 for c in range(col)] for r in range(row)]

    for r in range(row):
        for c in range(col):
            if field[r][c] == '*':
                ans[r][c] = '*'
                continue

            count = 0
            for check in checks:
                if 0 <= r + check[0] < row and 0 <= c + check[1] < col:
                    if field[r+check[0]][c+check[1]] == '*':
                        count += 1
            ans[r][c] = str(count)

    return '\n'.join([''.join(i) for i in ans])

t = 1
while True:
    try:
        row, col = list(map(int, input().split()))

        if row == 0 and col == 0: break

        field = []
        for i in range(row):
            field.append(list(input()))

        if t != 1: print()
        print(f'Field #{t}:\n{solve(row, col, field)}')

        t += 1
    except EOFError:
        break
# Accepted	PYTH3	0.050