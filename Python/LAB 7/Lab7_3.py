n=int(input("Enter list size = "))
lst=[]

for i in range(n):
    x=int(input("Enter x = "))
    lst.append(x)

for i in range(n):
    for j in range(n):
        if lst[i]<lst[j]:
            temp=0
            temp=lst[i]
            lst[i]=lst[j]
            lst[j]=temp

print(lst)