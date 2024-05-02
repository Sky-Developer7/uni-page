$(function(){
    $(".toggle").on("click", function(){
        if($(".menu").hasClass("active")){
            $(".menu").removeClass("active");
            $(this).find("a").html('<i class="fa-solid fa-bars" style="color:white"></i>');
        }else{
            $(".menu").addClass("active");
            $(this).find("a").html('<i class="fa-solid fa-close" style="color:white"></i>');
        }
    });
});


