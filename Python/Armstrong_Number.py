#Armstrong Numeber(153)->(1*1*1)+(5*5*5)+(3*3*3)
number=int(input("Enter The Number : "))
original = number
r=0
arm = 0
while(number>0):
    r = number%10
    arm = arm+(r**3)
    number = number//10
if original == arm :
    print("Armstrong Numeber")
else:
    print("Not Armstrong Number")
