n = int(input("How many tuples? "))
lst = []

for i in range(n):
    t = tuple(map(int, input("Enter tuple elements: ").split()))
    lst.append(t)

result = [t for t in lst if all(i > 0 for i in t)]
print("Tuples with positive elements:", result)
