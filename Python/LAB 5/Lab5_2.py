str='Darshan University'
i=int(input("Enter ith"))
print("remove",str[:i],str[i+1:])
for j in str:
	if j==str[i]:
		continue
	print(j)