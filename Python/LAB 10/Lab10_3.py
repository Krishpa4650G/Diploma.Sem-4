def Fact(n):
	ans=1
	for i in range(n):
		ans=ans*(i+1)
	return ans
n=int(input("Enter n"))
print(Fact(n))