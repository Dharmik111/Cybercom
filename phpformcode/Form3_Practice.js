function checkelement(){
	console.log("string");
var name = document.form.firstname.value;

if(name == "" || name==null){
alert('First Name is Mandatory!!');
return false;
}

var lname = document.form.lastname.value;

if(lname == "" || name==null){
alert('Last Name is Mandatory!!');
return false;
}

var day = document.form.day.value;
var month = document.form.month.value;
var year= document.form.year.value;

if(day == "Day"|| month=="Month"|| year=="Year"){
alert('Please Select Date of Birth..');
return false;
}

var gender = document.form.gender.value;

if(gender == ""){
alert('Please Select Approriate Gender!!');
return false;
}

var nation = document.form.nation.value;

if(nation == "Country"){
alert('Please Select One Country..');
return false;
}

var email = document.form.email.value;

if(email == "" || email==null){
alert('Please Enter Email Id..');
return false;
}

var num = document.form.phonenumber.value;

if(num == "" || num==null){
alert('Please Enter Your Mobile Number..');
return false;
}

var pass1 = document.form.password1.value;

if(pass1.length<6 || pass1==""){
alert('Password Required with minimum 6 character.');
return false;
}

var pass2 = document.form.password2.value;

if(pass2.length<6 || pass2==""){
alert('Password Required with minimum 6 character.');
return false;
}

if(pass1!=pass2){
alert('password doen\'t match with confirmation password..');
return false;
}
}