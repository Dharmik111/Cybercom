var john={
	score1:89,
	score2:120,
	score3:103
};
var mike={
	score1:116,
	score2:94,
	score3:123
};

var avgjohn=(john.score1+john.score2+john.score3)/3;
console.log('john avg is '+avgjohn);
var avgmike=(mike.score1+mike.score2+mike.score3)/3;
console.log('mike avg is '+avgmike);

if(avgjohn >  avgmike)
{
	 console.log(`john team is won title..`+'avgerage is '+avgjohn);
}
else
{
	console.log(`mike team is won title..`+'avgerage is ' +avgmike);
}

var john={
	score1:116,
	score2:94,
	score3:123
}
var mike={
	score1:116,
	score2:94,
	score3:123
};

var avgjohn=(john.score1+john.score2+john.score3)/3;
console.log('john avg is '+avgjohn);
var avgmike=(mike.score1+mike.score2+mike.score3)/3;
console.log('mike avg is '+avgmike);

if(avgjohn >  avgmike)
{
	 console.log(`john team is won title..`+'avgerage is '+avgjohn);
}
else if(avgjohn==avgmike)
{
	console.log(`ohhh it's draw both has same avg...`);
}
else
{
	console.log(`mike team is won title..`+'avgerage is ' +avgmike);
}

var john={
	score1:89,
	score2:120,
	score3:103
}
var mike={
	score1:116,
	score2:94,
	score3:123
}
var hary={
	score1:97,
	score2:134,
	score3:105,
};

var avgjohn=(john.score1+john.score2+john.score3)/3;
console.log('john avg is '+avgjohn);
var avgmike=(mike.score1+mike.score2+mike.score3)/3;
console.log('mike avg is '+avgmike);
var avghary=(hary.score1+hary.score2+hary.score3)/3;
console.log('hary avg is '+avghary);

if(avgmike>avgjohn && avgmike>avghary)
{
	console.log(`mike team is won title..`+'avgerage is ' +avgmike);
}
else if(avgjohn>avghary && avgjohn>avgmike)
{
	console.log(`mike team is won title..`+'avgerage is ' +avgmike);
}
else if(avgjohn==avgmike && avgmike==avghary)
{
	console.log(`ohhh it's draw all same avg...`);
}
else{
	console.log(`hary team is won title..`+'avgerage is'+avghary);
}
