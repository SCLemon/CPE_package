
# UVa 10050 - Hartals
def solve(days, party):
    strike = set()
    for i in party:
        temp = i
        while temp <= days:
            if temp % 7 != 6 and temp % 7 != 0:
                strike.add(temp)
            temp += i

    return len(strike)

T = int(input())
for t in range(T):
    days = int(input())
    party = []
    for i in range(int(input())):
        party.append(int(input()))

    print(solve(days, party))
# Accepted	PYTH3	0.010