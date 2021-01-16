//Function returning functions..

function interviewQue(job){
    if(job ==='designer'){
    	return function(name){
    		console.log(name + ',can you what UX design is ? ');
    	}
    }else if(job==='teacher'){
    	return function(name){
    		console.log('what subject do you teach,'+name+'?');
    	}
    }else{
    	return function(name){
    		console.log('hello'+name+'what do you do ?');
    	}
    }
}

var teacherQue=interviewQue('teacher');
var designerQue=interviewQue('designer');
teacherQue('john');
designerQue('jack');
designerQue('mark');

interviewQue('teacher')('mark');

//invoked funcions immediately.
/*
function game(){
	var score=Math.random()*10;
	console.log(score>=5);
}
game();*/

(function(){
	var score=Math.random()*10;
	console.log(score>=5);
})();

(function(goodluck){
	var score=Math.random()*10;
	console.log(score>=5-goodluck);
})(5);

//closures..

function retirement(retirementAge){
	var a='years left until the retirement.. ';
	return function(yearOfBirth){
		var age=2018-yearOfBirth;
		console.log((retirementAge-age)+a);
	}
}

var retirementUs=retirement(67);
retirementUs(1991);

//retirement(64)(1991);
var retirementGermany=retirement(65);
var retirementIceland=retirement(68);

retirementIceland(1987);
retirementGermany(1982);

function interviewQue(job){
	return function(name){
		if(job==='designer'){
               console.log(name + ',can you what UX design is ? ');
		}else if(job==='teacher'){
                 	
    		console.log('what subject do you teach,'+name+'?');
		}else{
	
    		console.log('hello'+name+'what do you do ?');

		}
	}
}

interviewQue('teacher')('john');

//bind call apply methods

var john={
	name:'john',
	age:19,
	job:'teacher',
	presentations: function(style,timeOfDay){
		if(style==='formal'){
			console.log('good'+timeOfDay+'ladies and gentlemen!!'+this.name+' '+this.job+' '+this.age+' ');
		}else if(style==='friendly'){
			console.log('hey whatsapp'+this.name+'' +this.job+' '+this.age+' '+timeOfDay);
		} 
	}
}
var emily={
	name:'emily',
	age:23,
	job:'designer'
};

john.presentations('formal','morning');
john.presentations.call(emily,'friendly','afternoon');

var johnFriendly=john.presentations.bind(john,'friendly');

johnFriendly('morning');
johnFriendly('night');

var emilyFormal=john.presentations(emily,'formal');
//emilyFormal('afternoon');

var years=[1987,1983,1980,2005,2013];

function arrayCalc(arr,fn){
     var arrRes=[];
     for(var i=0;i<arr.length;i++){
     	arrRes.push(fn(arr[i]));
     }
     return arrRes;
}
function calculateAge(el){
	return 2016-el;
}

function isFullAge(limit,el){
	return el>=limit;
}

var ages=arrayCalc(years,calculateAge);
var fullJapan=arrayCalc(ages,isFullAge.bind(this,20));
console.log(fullJapan);
console.log(ages);

//variable declarations with let and const..

//es5
var name5='jane smith';
var age5=23;
name5='jane miller';

console.log(name5);

//es6
const name6='jane smith';
let age=24;
console.log(name6);

//es5
function driverlicensce5(passrdTest){
	if(passrdTest){
		var fName='john';
		var yearOfBirth=1990;
	
	}console.log(fName+' '+yearOfBirth);
}
driverlicensce5(true);

//es6
 function driverlicensce6(passrdTest){
	let fName;
	const  yearOfBirth=1990;
	if(passrdTest){
		 fName='john';
				
	}console.log(fName+' '+yearOfBirth);
}
driverlicensce6(true);  

let i=23;
for(let i=0;i<5;i++){
	console.log(i);
}
console.log(i);

// blocks and iifs
//es6
{
	const a=1;
	let b=2;
	var c=3;
}
//console.log(a+b);
console.log(c);
//es5
(function(){
	var c=3;
})(); 

//string
let fName='john';
let lName='smith';
const yearOfBirth=1980;
function calcAge(year){
	return 2018-year;
}
//es5 
console.log('this is '+fName+' '+lName+' born in '+yearOfBirth+' '+calcAge(yearOfBirth));
//es6
console.log(`this is ${fName} ${lName}${yearOfBirth}${calcAge(yearOfBirth)}years old..`);

const n=`${fName} ${lName}`;
console.log(n.startsWith('j'));
console.log(n.endsWith('n'));
console.log(`${fName} `.repeat(5));

