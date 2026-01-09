n=int(input("Enter list size = "))
l=[]

for i in range(n):
    x=int(input("Enter x = "))
    l.append(x)
flag=0
a=int(input("Enter Search Element"))
for i in range(n):
    if a == l[i]:
        flag=1
if flag == 1:
    print("Found!!")
else:
    print("Not Found!!")
