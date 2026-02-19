
# UVa 10252 - Common Permutation
def solve(n1, n2):
    ans = []
    n1Dic, n2Dic = {}, {}
    for i in n1:
        n1Dic[i] = n1Dic.get(i, 0) + 1
    for i in n2:
        n2Dic[i] = n2Dic.get(i, 0) + 1

    for key, item in n1Dic.items():
        if key in n1 and key in n2:
            ans.extend([key] * min(n1Dic[key], n2Dic[key]))
    return ''.join(sorted(ans))

while True:
    try:
        n1 = input()
        n2 = input()

        print(solve(n1, n2))
    except EOFError:
        break
# Accepted	PYTH3	0.020