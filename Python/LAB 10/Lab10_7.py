def fibbo(a):
	n1=0
	n2=1
	for i in range(a):
		print(n1)
		n3=n1+n2
		n1=n2
		n2=n3
a=int(input("Enter a"))
fibbo(a)