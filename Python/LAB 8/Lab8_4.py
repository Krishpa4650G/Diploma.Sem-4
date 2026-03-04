n = int(input("How many elements? "))
lst = []

for i in range(n):
    lst.append(input("Enter element: "))

s = set(lst)
print("Set:", s)
print("Size of set:", len(s))
