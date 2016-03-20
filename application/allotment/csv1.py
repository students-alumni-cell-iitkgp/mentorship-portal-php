import csv
c=open('preferences.csv')
data=csv.reader(c)
datalist=list(data)
datalist = sorted(datalist,key=lambda l:int(l[0]))
for row in datalist:
	print row
c.close()
