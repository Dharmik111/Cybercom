function validate(){

var password1=document.form.password1.value;
var password2=document.form.password2.value;

if(password1!=password2){
	alert("please enter the correct password");
	return false;
}

var admin={
	name:document.form.name.value,
	email:document.form.email.value,
	password1:document.form.password1.value,
    password2:document.form.password2.value,
	city:document.form.city.value,
	state:document.form.state.value,
}
window.localStorage.setItem('admin',JSON.stringify(admin));}
if(localStorage.getItem(admin)!=null){
	document.getElementById('submitbutton').disabled; 
}