n = int(input("How many elements? "))
lst = []

for i in range(n):
    lst.append(input("Enter element: "))

t = tuple(lst)

if len(t) == len(set(t)):
    print("Tuple is distinct")
else:
    print("Tuple is not distinct")
