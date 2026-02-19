
# UVa 10235 - Simply Emirp
def isPrime(n):
    for i in range(2, int(n ** 0.5) + 1):
        if n % i == 0: return False
    return True

def solve(n):
    if isPrime(n) and isPrime(int(str(n)[::-1])) and n != int(str(n)[::-1]):
        return f'{n} is emirp.'
    elif isPrime(n):
        return f'{n} is prime.'
    else:
        return f'{n} is not prime.'

while True:
    try:
        n = int(input())

        print(solve(n))
    except EOFError:
        break
# Accepted	PYTH3	0.410