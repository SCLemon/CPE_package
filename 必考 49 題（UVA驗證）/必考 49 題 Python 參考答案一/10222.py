
# UVa 10222 - Decode the Mad man
# Thanks for you dictionary bro :D https://zerojudge.tw/ShowThread?postid=33728&reply=0
def solve(s):
    return ''.join([dict[i.lower()] for i in s])

# 反斜線要用: '\\'表示
dict = {
        'e':'q','d':'a','c':'z','r':'w','f':'s','v':'x','t':'e','g':'d','b':'c','y':'r','h':'f','n':'v','u':'t','j':'g','m':'b','i':'y','k':'h',',':'n','o':'u',
        'l':'j','.':'m','p':'i',';':'k','/':',','[':'o',"'":'l',']':'p','2':'`','3':'1','4':'2','5':'3','6':'4','7':'5','8':'6','9':'7','0':'8','-':'9','=':'0', '\\': '',
        ' ': ' '
    } 

while True:
    try:
        s = input()
        print(solve(s))
    except EOFError:
        break
# Accepted	PYTH3	0.050