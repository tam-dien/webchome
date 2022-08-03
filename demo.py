f = open("linhtinh.txt","r")
f2 = open("linhtinh2.txt","w")
f2.write(f.read().replace(",",",\n"))
print(f.read().replace(",",",\n"))