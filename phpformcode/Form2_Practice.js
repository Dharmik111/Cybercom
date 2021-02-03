function checkelement(){
var name = document.form.name.value;
var password = document.form.password.value;
var gender = document.form.gender.value;
var address = document.form.address.value;
var game = document.querySelectorAll('input[type="checkbox"]');
var status = document.form.status.value;


if(name == "" || name==null){
alert('Name is Mandatory!!');
return false;
}
if(password.length<8 || password==""){
alert('Password Required with minimum 8 character.');
return false;
}
if(gender == ""){
alert('Please Select Approriate Gender!!');
return false;
}

if(address == ""){
alert('Address Required!!');
return false;
}
if(!Array.prototype.slice.call(game).some(x => x.checked)){
alert('Select any one Game!!');
return false;
}
if(status== ""){
alert('Please Select Maritial Status!!');
return false;
}

}