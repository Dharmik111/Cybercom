function checkelement(){

var email = document.form.email.value;

if(email == ""){
alert('Email Id is Required!!');
return false;
}

var password = document.form.password.value;

if(password.length<6 || password==""){
alert('Password Required with minimum 6 character.');
return false;
}
}