#! /usr/bin/python

print 'Content-type: text/html'
print ''

age = 31

print age

pi = 3.14

print pi

name = "Kelly"

print name

print age / pi

number = "5"

print float(number) * pi

str = "My Name is "

print str[0]
print str[0:5]
print str[5]

print str + name

myList = ["Kelly", "Emily", "Ethan", "Oliver", "Leo", "Lucy"]

print myList
print myList[1]
print myList[2:4]

myTuple = (1, 2, 3, 4, 5, 6)

print myTuple
print myTuple[2]

myList[2] = 5

print myList

dict = {}
dict["dad"] = "Kelly"
dict["mom"] = "Emily"
dict[1] = "Ethan"
dict[2] = "Oliver"

print dict
print dict["mom"]

print dict.keys()
print dict.values()


