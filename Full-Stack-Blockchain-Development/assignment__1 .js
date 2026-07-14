
// Even Numbers between 1 to 100

for(let i=2;i<=100;i++){
   if(i%2==0)
   console.log(i)
}

// Given Number is Prime OR Not

let c=0
let n=prompt("Enter a number : ")
for(let i=2;i<n/2;i++){
    if(n%i==0) {
        console.log("Not a Prime Number")
        c++;break ;  }
}

if(c==0)
console.log("Prime Number")

// Calculator


let a=2,b=5,choice="mod"
switch(choice){
    case "add": 
            console.log(a+b)
            break
    case "sub": 
            console.log(a-b)
            break
    case "mul":
            console.log(a*b)
            break
    case "div":
            console.log(a/b)
            break
    case "mod":
            console.log(a%b)
            break
    default:
            console.log("enter correct choice")
}     
