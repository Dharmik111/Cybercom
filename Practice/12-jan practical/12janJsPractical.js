//lecture : Hoisting

//functions

calculateAge(1980); 

 function calculateAge(year)
{
    console.log(2019-year);
}



var retirenment=function(year)
{
	console.log(65-(2016-year));
}

retirenment(1970);

//variable
 console.log(age); 
var age=23;
console.log(age);

function foo(){
	var age=65;
	console.log(age);
}
foo();
console.log(age); 

//scoping and scope chain

var a='hello';
first();

function first(){
	var b='hii';
	second();

	 function second()
	 {
	 	var c='hey !';
	 	console.log(a+b+c); 
	 }
}
//scope chain

var a ='hello';
first();

function first(){
	var b ='hii';
	second();

	 function second()
	 {
	 	var c ='hey !';
	 	third() 
	 }
}

function third()
{
	var d ='john';
	console.log(a+d); 
}

//this keyword

//console.log(this);
calculateAge(1963); 
function calculateAge(year){
	console.log(2019-year)
	console.log(this);
}

var jack={
	name:'jack',
	yearofbirth:1967,
    calculateAge:function(){
      console.log(this);
      console.log(2018-this.yearofbirth);

     /* function innerFunction()
      {
      	console.log(this);
      }
      innerFunction();*/
    }
}
jack.calculateAge();

var mike={
	name:'mike',
	yearofbirth:1985,
};

mike.calculateAge=jack.calculateAge;
mike.calculateAge();

//object and properties

var jacky={
	fName:'jacky',
	lName:'lang',
	birthyear:1998,
	family:['jane','mark','bob','emily'],
	job:'teacher',
	isMarried:false
};
console.log(jacky);
console.log(jacky['lName']);
var x='birthyear';
console.log(jacky[x]);

jacky.job='designer';
jacky['isMarried']=true;
console.log(jacky);

//object syntax
var jane= new Object();
jane.fName='jane';
jane.birthyear=1986;
jane['lName']='lang';
console.log(jane);

//object and methods

var jacky={
	fName:'jacky',
	lName:'lang',
	birthyear:1998,
	family:['jane','mark','bob','emily'],
	job:'teacher',
	isMarried:false,
	calcAge:function(birthyear){
		this.age= 2018-this.birthyear;
	}
};

console.log(jacky.calcAge(1991));


jacky.age=jacky.calcAge();
console.log(jacky);
 
 //loops and iteration
 //for loop
 for(var i=0;i<10;i+=2)
 {
 	console.log(i);
 }

 var jack=['jack','lang',1993,'designer',false,'red'];
 for(var i=0;i<jack.length;i++)
 {
    console.log(jack[i]);
 }

 //while loop
 var i=0;
 while(i<jack.length){
 	console.log(jack[i]);
 	i++;
 }

//continue and break statements
var jack=['jack','lang',1993,'designer',false,'red'];
for(var i=0;i<jack.length;i++)
 {  if(typeof jack[i]!=='string') {break;}
    console.log(jack[i]);
 }
 
 //looping backword
 for(var i=jack.length-1;i>=0;i--)
 {
 	console.log(jack[i]);
 }