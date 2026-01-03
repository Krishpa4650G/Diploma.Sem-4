n=int(input("enter value of n:"))
l=[]
temp=0
for i in range(n):
	i=int(input("enter numbers:"))
	l.append(i)

for i in l:
	temp=l[0]
	l[0]=l[n-1]
	l[n-1]=temp

print(l)