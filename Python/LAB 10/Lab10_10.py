def  pri(a):
	flag=1
	for i in range(2,a):
		if a%i==0:
			flag=0
			break
	return flag
a=int(input("Enter a"))
print(pri(a))