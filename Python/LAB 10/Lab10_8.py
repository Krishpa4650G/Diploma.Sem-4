def Fact(n):
	if n==1:
		return 1
	else:
		return n*Fact(n-1)
n=int(input("Enter n"))
print(Fact(n))