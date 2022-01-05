list1 = ["a", "b", "c"]
list2 = [1, 2, 3]
dict = {}
for i in range(len(list1)):
    dict[list1[i]] = list2[i]
print(dict)