
'''
   N
w -|- E
   S
'''

move = {
        'N': (0, 1),  # go up - N
        'S': (0, -1), # go down - S
        'E': (1, 0),  # go right - E
        'W': (-1, 0)  # go left - W
    }

falls = []

def turn(faces: str, direction: str) -> str:
    dirs = ['N', 'E', 'S', 'W']
    cur = dirs.index(faces)
    direction = 1 if direction == 'R' else -1
    if cur + direction < 0: return dirs[-1]
    if cur + direction > 3: return dirs[0]
    return dirs[cur + direction]

def solve(width, height, pos, faces, codes):
    # pos -> [x, y]
    for code in codes:
        if code == 'F':
            previous = [pos[0], pos[1]]
            pos[0] += move[faces][0]
            pos[1] += move[faces][1]
            if (pos[0] < 0 or pos[0] > width) or (pos[1] < 0 or pos[1] > height):
                if previous in falls:
                    pos[0], pos[1] = previous[0], previous[1]
                    continue
                falls.append(previous)
                return f'{previous[0]} {previous[1]} {faces} LOST'
        else:
            faces = turn(faces, code)


    return f'{pos[0]} {pos[1]} {faces}'

width, height = list(map(int, input().split()))
while True:
    try:
        x, y, faces = input().split()
        codes = input()

        print(solve(width, height, [int(x), int(y)], faces, codes))
    except EOFError:
        break