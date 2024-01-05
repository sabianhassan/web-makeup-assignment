let login = document.getElementById("login-continer");
let singup = document.getElementById("singup-continer");
let sign= document.getElementById("sign");
let log= document.getElementById("log");
singup.style.display="none";

sign.addEventListener("click",function(){
  login.style.display="none";
  singup.style.display="block";
})

log.addEventListener("click",function(){
  login.style.display="block";
  singup.style.display="none";
})