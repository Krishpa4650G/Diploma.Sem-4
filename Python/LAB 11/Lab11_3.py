f = open("firstfile.txt","r")
data = f.read()
for i in data:
	if not i.isalnum() and not i.isspace():
		print(data)