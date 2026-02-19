
# UVa 490 - Rotating Sentences
def solve(text):
    row, col = len(text), max([len(s) for s in text])
    ans = ''
    for i in range(col):
        temp = ''
        for j in range(row-1, -1, -1):
            if i >= len(text[j]):
                temp += ' '
            else:
                temp += text[j][i]
        ans += temp + '\n'
    return ans[:-1]

text = []
while True:
    try:
        text.append(list(input()))

    except EOFError:
        print(solve(text))
        break
# Accepted	PYTH3	0.010