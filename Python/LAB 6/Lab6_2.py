n=int(input("enter value of n:"))
l=[]

for i in range(n):
	i=int(input("enter numbers:"))
	l.append(i)
small=l[0]
big=l[0]

for i in l:
	if small>i:
		small=i
	elif big<i:
		big=i

print(small)
print(big)