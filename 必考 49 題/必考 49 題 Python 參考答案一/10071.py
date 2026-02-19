
# 10071 - Back to High School Physics
while True:
    try:
        v, t = list(map(int, input().split()))
        print(v * 2 * t)
    except EOFError:
        break
# Accepted	PYTH3	1.190