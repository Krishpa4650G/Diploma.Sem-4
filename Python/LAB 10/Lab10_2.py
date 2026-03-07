def Summation(n):
	ans=0
	for i in range(n+1):
		ans=ans+i
	return ans
n=int(input("Enter n"))
print(Summation(n))