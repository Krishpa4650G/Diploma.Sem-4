n1 = int(input("How many elements in first set? "))
lst1 = []

for i in range(n1):
    lst1.append(int(input("Enter element: ")))

n2 = int(input("How many elements in second set? "))
lst2 = []

for i in range(n2):
    lst2.append(int(input("Enter element: ")))

s1 = set(lst1)
s2 = set(lst2)

print("Union:", s1 | s2)
print("Intersection:", s1 & s2)
print("Difference:", s1 - s2)
print("Symmetric Difference:", s1 ^ s2)
