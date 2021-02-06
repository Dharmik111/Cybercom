function validation(){
for(var i=0;i<=length.localStorage('user');i++){
var user={
	name:document.getElementById("name").value,
	email:document.getElementById("email").value,
	password1:document.getElementById("password").value,
    birthdate:document.getElementById("date").value,
};
window.localStorage.setItem('user',JSON.stringify(user));}}
function deleteItem() {
  localStorage.removeItem("mytime");
}
function update(){
var addToLocalStorageObject = function (name, key, value) {

var existing = localStorage.getItem(name);
existing = existing ? JSON.parse(existing) : {};
existing[key] = value;
localStorage.setItem(name, JSON.stringify(existing));

};}