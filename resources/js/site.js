$(".menu-btn").click(function(e) {
    e.preventDefault();
    $(this).toggleClass('menu-btn_active');
    $(".header").toggleClass('header--active');

})

$(".header__link").click(function(e) {
    $(".menu-btn").removeClass('menu-btn_active');
    $(".header").removeClass('header--active');

})


$('.show_popup').click(function(e) { // Вызываем функцию по нажатию на кнопку
    e.preventDefault();
    $('.popup').show(); // Открываем блок заднего фона
    $('.overlay_popup').show(); // Открываем блок заднего фона
})
$('.overlay_popup').click(function() { // Обрабатываем клик по заднему фону
    $('.overlay_popup, .popup').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})



// $("body").on('click', '[href*="#"]', function(e){
//     var fixed_offset = 120;
//     $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
//     e.preventDefault();
// });


jQuery(document).ready(function($) {
    var url=document.location.href;
    $.each($(".header__link"),function(){
        if(this.href==url){
            $(this).addClass('header__link--active');
        }
    });
});


