n=int(input("Enter list size = "))
l=[]

for i in range(n):
    x=int(input("Enter x = "))
    l.append(x)

for i in l:
    if i%2!=0:
        print("Odd is =",i)
