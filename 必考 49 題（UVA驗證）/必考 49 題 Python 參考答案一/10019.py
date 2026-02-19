
# UVa 10019 - Funny Encryption Method
def solve(n):
    # https://stackoverflow.com/questions/9210525/how-do-i-convert-hex-to-decimal-in-python
    n_2 = f'{n:b}'.count('1')
    n_16 = f'{int(str(n), 16):b}'.count('1')

    return f'{n_2} {n_16}'

T = int(input())
for t in range(T):
    n = int(input())
    print(solve(n))
# Accepted	PYTH3	0.010