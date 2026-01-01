a=int(input("Enter No:"))
add=0
temp=1
while a>0:
	temp=a%10
	add=add+temp
	a=a//10
print(add)