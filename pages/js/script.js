//pop up window for log in to the system using vanille javaSript

document.querySelector(".signIn").addEventListener("click", function(){
    document.body.classList.add("active-logIn");
   });

   document.querySelector("#close_btn").addEventListener("click", function(){
    document.body.classList.remove("active-logIn");
   });


