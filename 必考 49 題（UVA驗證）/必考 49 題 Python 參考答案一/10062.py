
# UVa 10062 - Tell me the frequencies!
def solve(s):
    dic = {}
    for i in s:
        dic[i] = dic.get(i, 0) + 1
    ans = sorted([[ord(key), val] for key, val in dic.items()], key=lambda x: (int(x[1]), -x[0]))
    return '\n'.join([f'{key} {val}'for key, val in ans])

count = 0
while True:
    try:
        s = input()
        if count != 0: print()
        if s:
            print(solve(s))
        count += 1
    except EOFError:
        break
# Accepted	PYTH3	0.040