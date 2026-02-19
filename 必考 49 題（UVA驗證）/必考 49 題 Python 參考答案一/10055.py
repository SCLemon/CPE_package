
# UVa 10055 - Hashmat the Brave Warrior
while True:
    try:
        n1, n2 = list(map(int, input().split()))
        print(abs(n1-n2))
    except EOFError:
        break
# Accepted	PYTH3	0.480