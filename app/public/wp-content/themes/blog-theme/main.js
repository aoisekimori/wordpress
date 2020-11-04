var navPos = jQuery( '#global-nav' ).offset().top; // グローバルメニューの位置
var navHeight = jQuery( '#global-nav' ).outerHeight(); // グローバルメニューの高さ
jQuery( window ).on( 'scroll', function() {
  if ( jQuery( this ).scrollTop() > navPos ) {
    jQuery( 'body' ).css( 'padding-top', navHeight );
    jQuery( '#global-nav' ).addClass( 'm_fixed' );
  } else {
    jQuery( 'body' ).css( 'padding-top', 0 );
    jQuery( '#global-nav' ).removeClass( 'm_fixed' );
    console.log("ウごいた！");
  }
});


$(function(){
       // #で始まるリンクをクリックしたら実行されます
       $('a[href^="#"]').click(function() {
         // スクロールの速度
         var speed = 400; // ミリ秒で記述
         var href= jQuery(this).attr("href");
         var target = jQuery(href == "#" || href == "" ? 'html' : href);
         var position = target.offset().top;
         jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
         return false;
       });
     });
