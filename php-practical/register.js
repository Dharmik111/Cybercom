function validation(){
var select = document.form.select.value;

if(select == "select"){
alert('Please select prefix..');
return false;
}	
	
var fname = document.form.fname.value;

if(fname == "" || fname==null){
alert('First Name is Mandatory!!');
return false;
}

var lname = document.form.lname.value;

if(lname == "" || lname==null){
alert('Last Name is Mandatory!!');
return false;
}

var email = document.form.email.value;

if(email == "" || email==null){
alert('Please Enter Email Id..');
return false;
}

var num = document.form.number.value;

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
var info = document.form.info.value;

if(info == "" || info==null){
alert('Please Enter Information..');
return false;
}
}