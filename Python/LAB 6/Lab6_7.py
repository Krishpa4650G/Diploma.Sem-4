n=int(input("enter value of n:"))
l=[]
temp=0
for i in range(n):
	i=int(input("enter numbers:"))
	l.append(i)
fi=int(input("Enter first position"))
la=int(input("Enter Last position"))
for i in l:
	temp=l[fi]
	l[fi]=l[la]
	l[la]=temp

print(l)