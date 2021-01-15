var Number = prompt("Enter Number:");
console.log("Fobonaci Series is: ");
var t1=0,t2=1,Temp;
for(i=1;i<=Number;i++){
	console.log(t1);
    Temp=t1+t2;
    t1=t2;
    t2=Temp;
}
