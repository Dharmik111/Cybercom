function validate(){

var pass1=document.form.password1.value;
var pass2=document.form.password2.value;

if(pass1!=pass2){
	alert("please enter the correct password");
}

var admin={
	name:document.form.name.value,
	email:document.form.email.value,
	password:document.form.password.value,
	city:document.form.city.value,
	state:document.form.state.value,
}
localStorage.setItem('admin',JSON.stringfiy(admin));}