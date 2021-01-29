//es5
var Person=function(name,yearofbirth,job){
	this.name=name;
	this.yearofbirth=yearofbirth;
	this.job=job;
}
Person.prototypr.calculateAge=function(){
	var age=new Date().getFullYear-this.yearofbirth;
	console.log(age);
}
var john5=new Person5('john'.1990,'teacher');

//es6
class Person6{
	constructor(name,yearofbirth,job){
		this.name=name;
		this.yearofbirth=yearofbirth;
		this.job=job;
	}
	calculateAge(){
		 var age=new Date().getFullYear-this.yearofbirth;
	     console.log(age);
	}
	static greeting(){
		console.log('hey there!!');
	}
}

const john6=new Person6('john',1990,'teacher');
 
 Person6.greeting(); 

//es5

 var Person5=function(name,yearofbirth,job){
	this.name=name;
	this.yearofbirth=yearofbirth;
	this.job=job;
}
Person5.prototype.calculateAge=function(){
	var age=new Date().getFullYear-this.yearofbirth;
	console.log(age);
}

var Athletes=function(name,yearofbirth,job,olymicGames,medals){
	Person5.call(this,name,yearofbirth,job);
	this.olymicGames=olymicGames;
	this.medals=medals;
}
Athletes5.prototype=Object.create(Person5.prototype);
Athletes5.prototype.wonmedal=function(){
	this.medals++;
	console.log(this.medals);
}


var johnAthletes5 = new Athletes5('john',1998,'swimmer',3,10);

johnAthletes5.calculateAge();
johnAthletes5.wonmedal();

//es6 
class Person6{
	constructor(name,yearofbirth,job){
		this.name=name;
		this.yearofbirth=yearofbirth;
		this.job=job;
	}
	calculateAge(){
		 var age=new Date().getFullYear-this.yearofbirth;
	     console.log(age);
	}
}

class Athletes6 extends Person6{
	constructor(name,yearofbirth,job,olymicGames,medals){
		super(name,yearofbirth,job);
		this.olymicGames=olymicGames;
		this.medals=medals;
	}
}   wonmedal(){
	this.medals++;
	console.log(this.medals);
}

const johnAthletes6=new Athletes6('john',1990,'swimmer',3,10);
johnAthletes6.wonmedal();
johnAthletes6.calculateAge();