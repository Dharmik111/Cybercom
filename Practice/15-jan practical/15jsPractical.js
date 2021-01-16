 //function constructer
var john={
	name:'john',
	yearofbirth:1897,
	job:'designer'
};

var Person = function(name,yearofbirth,job){
	 this.name=name;
	 this.yearofbirth=yearofbirth;
	 this.job=job;
	 this.calculateAge=function(){
	 	  console.log(1917-this.yearofbirth);
	 }
}
Person.prototype.calculateAge =function(){
	 	  console.log(1917-this.yearofbirth);
	 };

Person.prototype.lastName='smash';
var john =new Person('john',1897,'designer');
var jane=new Person('jane',1876,'designer'); 
var mark=new Person('mark',1886,'retired'); 

john.calculateAge();
jane.calculateAge();
mark.calculateAge();

console.log(john.lastName);
console.log(jane.lastName);
console.log(mark.lastName);

//object.create
var personProto={
    calculateAge:function(){
    	 console.log(1917-this.yearofbirth);}
}
var john=Object.create(personProto); 
john.name='john';
john.yearofbirth=1896;
john.job='teacher'; 

var jane =Object.create(personProto,  
{
	name:{value:'jane'},
	yearofbirth:{value:1934},
	job:{value:'designer'}
});

//primitive vs objects

//primitive
var a=23;
var b=a;
a=46;
console.log(a);
console.log(b);

//objects

var obj1={
	name:'john',
	age:27
};

var obj2=obj1;
obj1.age=30;
console.log(obj1.age);
console.log(obj2.age);

//function
var age=27;
var obj={
	name:'jonas',
	city:'lisbon'
};
function change(a,b){
	a=38;
	b.city='san francisco';
}

change(age,obj);
console.log(age);
console.log(obj.city); 

//passing function as arguments
var years=[1987,1983,1980,2005,2013];

function arrayCalc(arr,fn){
     var arrRes=[];
     for(var i=0;i<arr.length;i++){
     	arrRes.push(fn(arr[i]));
     }
     return arrRes;
} 

function maxHeratRate(el){
	if(el>=18 && el<=81){
		return Math.round(286.9-(0.67*el));
	}
	else{
		return -1;
	}
}

function calculateAge(el){
	return 2016-el;
}

function isFullAge(el){
	return el>=18;
}
var age=arrayCalc(years,calculateAge);
var fullage=arrayCalc(age,isFullAge);
var rates=arrayCalc(age,maxHeratRate);
console.log(age);
console.log(fullage);
console.log(rates);