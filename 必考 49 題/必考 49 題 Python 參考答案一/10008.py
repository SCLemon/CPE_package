
# UVa 10008 - What's Cryptanalysis?

def solve(text):
    ans = {}
    for i in text:
        if 'A' <= i <= 'Z':
            ans[i] = ans.get(i, 0) + 1
    ansList = [f'{key} {val}' for key, val in ans.items()]
    ansList.sort(key=lambda x: (-int(x[2:]), x[0]))
    return '\n'.join(ansList)


T = int(input())
text = ''
for t in range(T):
    text += input()
print(solve(text.upper()))