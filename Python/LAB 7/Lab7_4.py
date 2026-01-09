n=int(input("Enter list size = "))
l=[]

for i in range(n):
    x=input("Enter x = ")
    l.append(x)

l2 = ""
for i in range(n):
    l2+=l[i]
print(l2)