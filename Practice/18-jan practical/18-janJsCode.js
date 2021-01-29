const years=[1990,1987,1976,1937];

//Es5
var ages5 =years.map(function(el){
   return 2016-el;
});
console.log(ages5);
//es6
let const ages6=years.map(el => 2016-el);
console.log(ages6);

ages6=years.map((el,index)=>`Age element ${index+1}:${2016-el}.`);
console.log(ages6);

ages6=years.map((el,index)=>{
	const now =new Date().getFullYear();
	const age=now-el;
	return `Age element ${index+1}:${age}.`
});
console.log(ages6);

//es5

var box5={
	color:'green';
	position:1;
	clickMe:function(){
		var self=this;
		document.querySelector('click',()=>{
			var str='this is box'+self.position+'and it is'+self.color;
			alert(str);
		})
	}
}
box5.clickMe();

//es6
var box6={
	color:'green';
	position:1;
	clickMe:function(){
		var self=this;
		document.querySelector('click',()=>{
			var str='this is box'+self.position+'and it is'+self.color;
			alert(str);
		})
	}
}
box6.clickMe();

function Person(name){
	this.name=name;
}

//es5
Person.prototype.myFriends5=function(friends){
	var arr=friends.map(function(el)
	{
		return this.name+'is friends with '+el;
	}.bind(this));
	console.log(arr);

}
var friends=['bob','jane','mark'];
new 
Person('john').myFriends5(friends);

//es6
function Person(name){
	this.name=name;
}

//es5
Person.prototype.myFriends6=function(friends){
	var arr=friends.map(function(el=>`${this.name} is friends with ${el}`);
	console.log(arr);

}

new 
Person('mike').myFriends6(friends);

//es5
var john=['john',26];
//var name=john[0];
//var age=john[1];

//es6
const [name,year]=['john',26];
console.log(name);
console.log(age); 

const obj ={
	firstName:'john';
	lastName:'smith';
};

const{firstName,lastName}=obj;
console.log(firstName);
console.log(lastName);

const {firstName:a,lastName:b}=
console.log(a);
console.log(b);

function calcAgeRetirement(year){
	const age=new
	Date().getFullYear()-year;
	return [age,65-age];
}

const [age,retirenment]={calcAgeRetirement(1990); 
	 console.log(age2);
	 console.log(retirenment); }

const boxes=document.querySelectorAll('.box');

//es5
var boxesArr5=Array.prototype.call(boxes);
boxesArr5.forEach(function(cur){
	cur.style.backgroundColor='dodgerblue';
});

//es6
const boxesArr6=Array.from(boxes);
boxesArr6.forEach(cur =>cur.style.backgroundColor='dodgerblue');

//es5
for(var i=0;i<boxesArr5.length;i++){
	if(boxesArr5[i].className==='blue')
	{
		continue;
	}
	boxesArr5[i].textContent='i changed to blue';
}

//es6
for(const cur of boxesArr6){
	if(boxesArr6.className.includes('blue')){
		continue;
	}
	cur.textContent='i changed to blue';
}

//es5
var ages=[12,17,14,11,9];
var full=ages.map(function(cur){
	return cur >=18;
});
console.log(full);
console.log(full.indexof(true));

//es6
console.log(ages.findIndex(cur=> cur=> 18));
console.log(ages.find(cur => cur=> 18));