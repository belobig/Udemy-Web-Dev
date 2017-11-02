#! /usr/bin/python

print 'Content-type: text/html'
print ''
	
def sayHello():
	print "Hello!"
	
sayHello()

def saySomething(something):
	print something
	
saySomething("Hi there!")

def multiplyTwoNumbers(x, y):
	return x * y
	
print multiplyTwoNumbers(4, 6)

# Create a function highestCommonFactor which returns the highest number that divides into two other numbers exactly

def highestCommonFactor(a, b):
	for i in range(1, a + 1):
		if a % i == 0 and b % i == 0:
			hcf = i
	return hcf
	
print highestCommonFactor(1024, 768)

c = 5
d = 6

def addTwoNumbers():
	e = 8
	return c + d
	
print addTwoNumbers()
print e
# Scope: variables defined in the main flow of the code are accessible in subsequent code or functions, but functions can't change it permanently
# Variables defined within a funtion cannot be accessed outside the fucntion