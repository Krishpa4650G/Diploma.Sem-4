str='Darshan University'
w=str.split()
str2=""
for i in w:
	str2+=i[::-1]+" "
print(str2)