n = int(input("How many elements? "))
lst = []

for i in range(n):
    lst.append(input("Enter element: "))

t = tuple(lst)
t1 = tuple(set(t))
print("Tuple without duplicates:", t1)
