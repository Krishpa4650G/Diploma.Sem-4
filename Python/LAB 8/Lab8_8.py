n = int(input("How many tuples? "))
lst = []

for i in range(n):
    t = tuple(map(int, input("Enter tuple elements: ").split()))
    lst.append(t)

k = int(input("Enter value of k: "))

result = [t for t in lst if all(i % k == 0 for i in t)]
print("Result:", result)
