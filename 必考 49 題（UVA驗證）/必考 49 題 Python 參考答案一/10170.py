import sys
import math

for line in sys.stdin:
    if not line.strip():
        continue
    
    S, D = map(int, line.split())
    
    a = 2 * S - 1
    k = math.ceil((-a + math.sqrt(a*a + 8*D)) / 2)
    
    N = S + k - 1
    print(N)
