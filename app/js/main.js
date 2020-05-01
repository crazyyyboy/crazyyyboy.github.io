$(function(){

   $('.services__btn').on('click', function(){
      $('.services__wrapper').addClass('destroy');
      $('.order__wrapper').addClass('active');
   });

   $('.order__content-btn').on('click', function(){
      $('.order__wrapper').addClass('destroy');
      $('.thanks__wrapper').addClass('active');
   });

   $('a[href^="#"]').click(function () { 
      elementClick = $(this).attr("href");
      destination = $(elementClick).offset().top;
     {
     $('html,body').animate( { scrollTop: destination }, 1200);
     } 
     return false;
   });

   $('.portfolio__inner').slick({
      dots: false,
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '<button type="button" class="slick-next wow">Следующий</button>',
   });

   new WOW().init();

});