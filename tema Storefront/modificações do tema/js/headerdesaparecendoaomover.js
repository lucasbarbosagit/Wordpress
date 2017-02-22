// efeito header desaparecendo e aparecendo ao mover pagina.

jQuery( document ).ready(function( $ ) { // usei referências do jquery noconflit

    var lastScrollTop = 0, delta = 5;
    $(window).scroll(function(event){
       var st = $(this).scrollTop();
       
       if(Math.abs(lastScrollTop - st) <= delta)
          return;
       
if (st > lastScrollTop){
       // downscroll code
    $("#masthead > div > div.storefront-primary-navigation").css("top","-105px")
       .hover(
           function() {
               $("#masthead > div > div.storefront-primary-navigation").css("top","100px");
           }
       )
   } else {
      // upscroll code
      $("#masthead > div > div.storefront-primary-navigation").css("top","100px");
   }
       lastScrollTop = st;
    });
});