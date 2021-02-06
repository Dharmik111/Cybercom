function validate()
{

var count=0;
var fname = document.getElementById("name").value;
var password = document.getElementById("password").value;
var a=JSON.parse(localStorage.getItem("admin"));

if(a.password1!=password)
{
alert("Invalid User");
return true;
count=1;

}
else if(a.name!=fname)
{
alert("Invalid User");
return true;
count=1;
}

else
{
alert("Valid User");
}
}