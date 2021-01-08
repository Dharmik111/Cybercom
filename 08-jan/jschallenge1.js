var johnHeight=5.8;
var johnWeight=62;

var markHeight=6.3;
var markWeight=70;

johnHeight=johnHeight*0.3048;
markHeight=markHeight*0.3048;

johnBMI=johnWeight/(johnHeight*johnHeight);
markBMI=markWeight/(markHeight*markHeight);

var ismarkBMIisHigh= markBMI > johnBMI;

if(ismarkBMIisHigh){
	console.log(`is markBMI is high than johnBMI ? ${ismarkBMIisHigh}`);

}
else{
	console.log(`is markBMI is less than johnBMI ? ${ismarkBMIisHigh}`);
}