function showMessage(){
alert("Ми пропонуємо тури по всьому світу!");
}

function sendForm(){

let name = document.getElementById("name").value;
let email = document.getElementById("email").value;

if(name == "" || email == ""){
alert("Будь ласка заповніть всі поля");
return false;
}

alert("Дякуємо за заявку!");

return false;
}