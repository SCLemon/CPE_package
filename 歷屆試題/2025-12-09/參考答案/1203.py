import sys
import heapq

heap = []

# 讀 Register
while True:
    line = sys.stdin.readline().strip()
    if line == "#":
        break
    
    _, q_num, period = line.split()
    q_num = int(q_num)
    period = int(period)
    
    heapq.heappush(heap, (period, q_num, period))

# 讀 k
k = int(sys.stdin.readline())

for _ in range(k):
    next_time, q_num, period = heapq.heappop(heap)
    print(q_num)
    heapq.heappush(heap, (next_time + period, q_num, period))
