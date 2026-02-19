import sys

# 每個數字對應七段是否亮
segments = {
    '0': [1,1,1,1,1,1,0],
    '1': [0,1,1,0,0,0,0],
    '2': [1,1,0,1,1,0,1],
    '3': [1,1,1,1,0,0,1],
    '4': [0,1,1,0,0,1,1],
    '5': [1,0,1,1,0,1,1],
    '6': [1,0,1,1,1,1,1],
    '7': [1,1,1,0,0,0,0],
    '8': [1,1,1,1,1,1,1],
    '9': [1,1,1,1,0,1,1],
}

while True:
    line = sys.stdin.readline()
    if not line:
        break
    
    s, n = line.split()
    s = int(s)
    
    if s == 0:
        break
    
    rows = 2*s + 3
    
    for r in range(rows):
        line_output = []
        
        for digit in n:
            seg = segments[digit]
            
            # 上橫線
            if r == 0:
                line_output.append(" " + ("-"*s if seg[0] else " "*s) + " ")
            
            # 上直線
            elif 0 < r < s+1:
                left = "|" if seg[5] else " "
                right = "|" if seg[1] else " "
                line_output.append(left + " "*s + right)
            
            # 中橫線
            elif r == s+1:
                line_output.append(" " + ("-"*s if seg[6] else " "*s) + " ")
            
            # 下直線
            elif s+1 < r < 2*s+2:
                left = "|" if seg[4] else " "
                right = "|" if seg[2] else " "
                line_output.append(left + " "*s + right)
            
            # 下橫線
            else:
                line_output.append(" " + ("-"*s if seg[3] else " "*s) + " ")
        
        print(" ".join(line_output))
    
    print()
