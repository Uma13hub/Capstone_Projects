N , money = map(int, input().split())
price= list(map(int,input().split()))
volume= list(map(int,input().split()))
k=[]
for i in range(N+1):
    temp=[]
    for j in range(money+1):
        temp.append(0)
    k.append(temp)
for i in range(N+1):
    for m in range(money+1):
        if i==0 or m==0:
            k[i][m]= 0
        elif price[i-1]<= m:
            k[i][m]=max(volume[i-1] + k[i-1][m-price[i-1]] , k[i-1][m])
        else:
            k[i][m]=k[i-1][m]
print(k[N][money])                

