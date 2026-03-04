n = int(input("How many elements? "))
lst = []

for i in range(n):
    lst.append(int(input("Enter element: ")))

s = set(lst)
print("Maximum:", max(s))
print("Minimum:", min(s))
