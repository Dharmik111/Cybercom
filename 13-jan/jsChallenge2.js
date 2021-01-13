var john={
    firstName:'john',
    lastName:'wick',
	Height:1.61544,// height in meter
	Weight:62,
	CalcJohnBMI:function(){
       return this.JohnBMI=this.Weight/(this.Height*this.Height);
	}
	
};
john.CalcJohnBMI();

var mark={
	firstName:'mark',
	lastName:'zuckerberg',
	Height:1.92024,// height in meter 
    Weight:70,
    CalcMarkBMI:function(){
       return this.MarkBMI=this.Weight/(this.Height*this.Height);
	}
    
};
mark.CalcMarkBMI();

   if(mark.MarkBMI > john.JohnBMI){
	    console.log('Mark Zuckerberg BMI is High : '+mark.MarkBMI);
    }
  else if(mark.MarkBMI < john.JohnBMI){
    	console.log('John Wick BMI is High john wick : '+john.JohnBMI);
    }
  else{
       console.log('John Wick BMI and Mark Zuckerberg BMI is Same...');
   }
