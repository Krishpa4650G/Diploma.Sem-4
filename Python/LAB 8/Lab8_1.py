n = int(input("How many elements? "))
lst = []

for i in range(n):
    lst.append(input("Enter element: "))

t = tuple(lst)
print("Reversed tuple:", t[::-1])
