n=int(input("enter list size :"))
lst=[]
for i in range(n):
    x = int(input("enter x:"))
    lst.append(x)
print (lst)
s=int(input("enter s :"))

a=lst[:s]
b=lst[s:]
c=b+a
print (c)