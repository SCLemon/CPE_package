# UVa 10242 - Fourth Point !!

import sys

for line in sys.stdin:
    line = line.strip()
    if not line:
        continue  # 跳過空行
    
    nums = list(map(float, line.split()))
    if len(nums) != 8:
        continue  # 防呆
    
    x1, y1, x2, y2, x3, y3, x4, y4 = nums

    if x1 == x3 and y1 == y3:
        rx = x2 + x4 - x1
        ry = y2 + y4 - y1
    elif x1 == x4 and y1 == y4:
        rx = x2 + x3 - x1
        ry = y2 + y3 - y1
    elif x2 == x3 and y2 == y3:
        rx = x1 + x4 - x2
        ry = y1 + y4 - y2
    else:
        rx = x1 + x3 - x2
        ry = y1 + y3 - y2

    print(f"{rx:.3f} {ry:.3f}")
