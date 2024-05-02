$('.sub_btn').Click(function(){
    $(this).next('.dropdown_menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});