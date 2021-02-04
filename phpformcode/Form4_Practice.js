function checkelement(){
var name = document.form.name.value;

if(name == "" || name==null){
alert('Name is Mandatory!!');
return false;
}
var email = document.form.email.value;

if(email == ""){
alert('Email Id is Required!!');
return false;
}

var subject = document.form.subject.value;

if(subject == ""){
alert('Please Enter Your subject..');
return false;
}

var message = document.form.msg.value;

if(message == ""){
alert('Please Enter Some Input..');
return false;
}

}