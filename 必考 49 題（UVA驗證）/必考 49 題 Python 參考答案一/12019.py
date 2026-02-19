
# UVa 12019 - Doom's Day Algorithm
import datetime
def solve2(month, day):
    date = datetime.date(2011, month, day)
    weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
    dayOfWeek = date.weekday()  # 返回 0-6，其中0是星期一，6是星期日
    return weekdays[dayOfWeek]
 
T = int(input())
for t in range(T):
    month, day = list(map(int, input().split()))
    print(solve2(month, day))
# 	Accepted	PYTH3	0.050