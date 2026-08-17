num = int(input("Enter the number"))
if num<2:
    print("Not a Prime number")
else:
    for i in range(2,num):
        if num%i == 0:
            print("Not a Prime number")
            break
    else:
        print("Prime number")
