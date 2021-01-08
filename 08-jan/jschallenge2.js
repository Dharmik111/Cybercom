var john1={
	jscore1:78,
	jscore2:101,
	jscore3:99
};
var mike1={
	mscore1:65,
	mscore2:82,
	mscore3:106
};

var avgjohn=(john1.jscore1+john1.jscore2+john1.jscore3)/3;
var avgmike=(mike1.mscore1+mike1.mscore2+mike1.mscore3)/3;

if(avgjohn >  avgmike)
{
	 console.log(`john1 team is won title..`);
}
else
{
	console.log(`mike1 team is won title..`);
}

john1.jscore1=20;
mike1.mscore1=130;

var avgjohn=(john1.jscore1+john1.jscore2+john1.jscore3)/3;
var avgmike=(mike1.mscore1+mike1.mscore2+mike1.mscore3)/3;

if(avgjohn >  avgmike)
{
	 console.log(`john1 team is won title..`);
}
else
{
	console.log(`mike1 team is won title..`);
}
