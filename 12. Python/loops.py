#! /usr/bin/python

print 'Content-type: text/html'
print ''

for i in range(5, 11):
	print i
	
print "Kelly"

foodList = ['Arroz e Feijao', 'Pasta e Fagiole', 'Bangers & Mash']

for food in foodList:
	print "I like eating " + food + "."


x = 0
while x <= 10:
	print x
	x += 1
# x++ doesn't work in python to increment by 1, so either use x=x+1 or x+=1

# Dictionary - 4 names (key) and ages (value) of people
# Loop wich prints. eg. Sam is 7

dict = {}
dict["Kelly"] = 31
dict["Emily"] = 29
dict["Ethan"] = 8
dict["Oliver"] = 6

for keys in dict:
	print keys + " is " + str(dict[keys]) + "."