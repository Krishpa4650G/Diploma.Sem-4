n1=int(input("Enter list size = "))
n=[]
q=[]
p=[]
for i in range(n1):
    n.append(input("Enter Name:"))
    q.append(int(input("Enter Quantity:")))
    p.append(int(input("Enter Price:")))
f=[]
print("Name","\t","Quantity","Price","Amount")
final=0
for i in range(n1):
	f.append(q[i]*p[i])
	print(n[i],"\t",q[i],"\t",p[i],"\t",f[i])
	final+=f[i]
print(final)