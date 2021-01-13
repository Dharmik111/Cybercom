var john1=124;
var john2=48;
var john3=268;

var tip=[];
var finalBill=[];
 
function tipCalc(john1){
	if(john1<50)
	{   var tip1=(0.2)*john1;
		tip.push(tip1.toFixed(2));
		var finalbill1=tip1+john1;
		finalBill.push(finalbill1);
	}
	else if(john1>50 && john1<200)
	{   var tip2=(0.15)*john1;
		tip.push(tip2.toFixed(2));
		var finalbill2=tip2+john1;
		finalBill.push(finalbill2);

	}
    else{
       var tip3=(0.10)*john1;
		tip.push(tip3.toFixed(2));
		var finalbill3=tip3+john1;
		finalBill.push(finalbill3);
		
    }
}
function tipCalc(john2){
	if(john2<50)
	{
		var tip1=(0.20)*john2;
		tip.push(tip1.toFixed(2));
		var finalbill1=tip1+john2;
		finalBill.push(finalbill1);
		
		
	}
	else if(john2>50 && john2<200)
	{
		var tip2=(0.15)*john2;
		tip.push(tip2.toFixed(2));
		var finalbill2=tip2+john2;
		finalBill.push(finalbill2);
		
		
	}
    else{
       var tip3=(0.10)*john2;
		tip.push(tip3.toFixed(2));
		var finalbill3=tip3+john2;
		finalBill.push(finalbill3);
		
		
    }
}
 function tipCalc(john3){
	if(john3<50)
	{
		var tip1=(0.20)*john3;
		tip.push(tip1.toFixed(2));
		var finalbill1=tip1+john3;
		finalBill.push(finalbill1);
		
		
	}
	else if(john3>50 && john3<200)
	{
		var tip2=(0.15)*john3;
		tip.push(tip2.toFixed(2));
		var finalbill2=tip2+john3;
		finalBill.push(finalbill2);
		

	}
    else{
      var tip3=(0.10)*john3;
		tip.push(tip3.toFixed(2));
		var finalbill3=tip3+john3;
		finalBill.push(finalbill3);
		
    }
}
tipCalc(john1);
tipCalc(john2);
tipCalc(john3);
console.log('FinalBill: '+finalBill);
console.log('Tip: '+tip);
