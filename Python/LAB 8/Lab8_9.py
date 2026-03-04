n = int(input("How many set elements? "))
lst1 = []

for i in range(n):
    lst1.append(input("Enter element: "))

s = set(lst1)

n = int(input("How many tuple elements? "))
lst2 = []

for i in range(n):
    lst2.append(input("Enter element: "))

t = tuple(lst2)

print("Set to Tuple:", tuple(s))
print("Tuple to Set:", set(t))
