let loginbtn = document.querySelector(".login")
let username = document.querySelector(".email")
let password = document.querySelector(".chpassword")

loginbtn.addEventListener("click", function(){
  if(username.value != "" || password.value != ""){
  location.href = "https://www.facebook.com"
  }
 
})

let form = document.querySelector("#form")
console.log(form)