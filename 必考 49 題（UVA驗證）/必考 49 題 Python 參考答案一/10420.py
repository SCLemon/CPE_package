
# UVa 10420 - List of Conquests
T = int(input())
count = {}
for t in range(T):
    country = input().split()[0]
    count[country] = count.get(country, 0) + 1

for country, count in sorted(count.items()):
    print(f'{country} {count}')
# Accepted	PYTH3	0.070