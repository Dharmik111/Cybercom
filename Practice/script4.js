//if else

var fName='vicky';
var civilStatus='single';

if(civilStatus==='married')
{
	console.log(fName + 'is Married !!!');
}
else
{
	console.log(fName + ' hopefully married in future...');
}

var isMarried=true;
if(isMarried)
{
	console.log(fName + ' is Married !!!');
}
else
{
	console.log(fName + ' hopefully married in future...');
}

var johnHeight=5.8;
var johnWeight=62;

var markHeight=6.3;
var markWeight=70;

johnHeight=johnHeight*0.3048;
markHeight=markHeight*0.3048;

johnBMI=johnWeight/(johnHeight*johnHeight);
markBMI=markWeight/(markHeight*markHeight);
 

if(markBMI > johnBMI){
	console.log(' markBMI is High;');

}
else{
	console.log(' johnBMI is high');
} 

//boolean log 

var fName='wick';
age=22;
if(age<15)
{
	console.log(fName+' is a boy');
}
else if(age>=15 && age<20)
{
	console.log(fName+ ' is teenager');
}
else if(age>=20 && age<30)
{
	console.log(fName+ ' is a young man');
}
else
{
	console.log(fName+' is a man');
}

// temporary operator and switch statements
// temporary operator
var fName='taylor';
var age=18;

age>=18? console.log(fName+' is drink beer'):
 console.log(fname+'is drink juice');

var drink=age>=18?'beer':'juice';
console.log(drink);

//switch statements

var car='mustang';
switch(car)
{
	case 'mustang':
	 console.log(fName+' is mustang driver');
	 break;
	case 'audi':
	 console.log(fName+' is audi driver');
	 break;
	case 'jeguar':
	 console.log(fName+' is jeguar driver');
	 break;
	default:
	 console.log(fName+' is some other car driver');
     break;
}

var fName='jack';
var age=10;
switch(true)
{
	case age<13:
	 console.log(fName+' is a boy');
	 break;
	case age>=13 && age<20:
	 console.log(fName+' is a teenager');
	 break;
	case age>20 && age<30:
	 console.log(fName+' is a young man');
	 break;
	default:
	 console.log(fName+' is man');
     break;
}

//truthy and falsy values and equality operators

//falsy values:undefined, null,	0,'',NaN
//truthy values: non faksy values

var height;
height=23;
if(height || height===0)
{
	console.log('var is defined!!');
}
else
{
	console.log('var is not defined....');
}

//equality operators

if(height==='23')
{
	console.log('the == is does type coresion!!')
}

//functions


function calculateAge(birthyear){
	return 2022-birthyear;
}
  
var wick=calculateAge(1992);
var jack=calculateAge(1997);
var andy=calculateAge(1981);
console.log(wick,jack,andy);

function yearUntilRetirenment(year,fName)
{
	var age=calculateAge(year);
	var retirenment=65-age;
	if(retirenment>0)
	{
	console.log(fName+ ' is retire in '+retirenment+' years.' );
    }
    else
    {
    	console.log(fName+' is already retired !!! ')
    }
}
yearUntilRetirenment(1993,'bony');
yearUntilRetirenment(1997,'john');
yearUntilRetirenment(1995,'canon');

//functions statements and expressions

var whatIsIt=function(job,fName)
{
    switch(job)
    {
    	case 'teacher':
    	 return fName+' teaches the kids.';
        case 'driver':
         return fName+' driver the car';
        case 'designer':
         return fName+' is design the website';
        default:
         return fname+' does something else';
    }
} 
console.log(whatIsIt('teacher','raju'));
console.log(whatIsIt('driver','kent'));
console.log(whatIsIt('designer','nomy'));

//arrays

var names=['john','wick','kendy'];
var years=new Array(1981,1984,1988);

console.log(names);
console.log(names.length);

names[1]='venty';
names[names.length]='kelvin';
console.log(names);

//diffrent data types

var danieal=['den','smith',1983,'designer',false];

danieal.push('black');
danieal.unshift('Mr.'); 
console.log(danieal);

danieal.pop();
danieal.shift();
console.log(danieal);

console.log(danieal.indexOf(1983));

var designer=danieal.indexOf('designer')===-1?'danieal is not designer':
'denieal is designer';
console.log(designer);