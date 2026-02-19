
# UVa 10929 - You can say 11
while True:
    try:
        n = input()
        if n == '0': break
        if int(n) % 11 == 0:
            print(f'{n.strip()} is a multiple of 11.')
        else:
            print(f'{n.strip()} is not a multiple of 11.')
    except EOFError:
        break
# Accepted	PYTH3	0.060