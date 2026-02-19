import sys

n = 0  # 計數雙引號出現次數

for line in sys.stdin:
    result = []
    for ch in line:
        if ch == '"':
            if n % 2 == 0:
                result.append("``")
            else:
                result.append("''")
            n += 1
        else:
            result.append(ch)
    print("".join(result), end="")
