   //reveal log in btn
   
   var form_1 = document.getElementById("form_1");
   var form_2 = document.getElementById("form_2");

   var btn_login1 = document.getElementById("btn_login1");
   var btn_login2 = document.getElementById("btn_login2");

   btn_login1.onclick = function(){
     form_2.style.left = "1px";
     form_1.style.left = "-450px";
   }

     btn_login2.onclick = function(){
     form_2.style.left = "450px";
     form_1.style.left = "1px";
   }

   document.querySelector("#close_btn").addEventListener("click", function(){
    document.body.classList.remove("active-logIn");
   });