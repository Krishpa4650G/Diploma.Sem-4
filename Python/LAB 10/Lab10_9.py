def fibo(n):
	if n==1:
		return 1
	elif n==0:
		return 0
	return (fibo(n-1) + fibo(n-2))

n = int (input("Enter:"))
for i in range(n+1):
	print(fibo(i))