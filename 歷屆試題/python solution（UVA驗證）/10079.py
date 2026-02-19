import sys

for line in sys.stdin:
    n = int(line.strip())
    if n < 0:
        break
    print(n * (n + 1) // 2 + 1)
