n = int(input("How many elements? "))
lst = []

for i in range(n):
    lst.append(int(input("Enter element: ")))

s = set(lst)
x = int(input("Enter element to remove: "))

s.remove(x)
print("Updated set:", s)
