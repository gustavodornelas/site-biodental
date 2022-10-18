$(window).scroll(function() { 
  var scroll = $(window).scrollTop();

  if (scroll > 150) {
      $('nav').addClass('sticker');
      $('.nav-list li').addClass('li-sticker');
      $('.search').addClass('search-sticker');
      $('.logo-text').addClass('logo-text-sticker');
      $('.logo').addClass('logo-sticker');

  } else {
      $('nav').removeClass('sticker');
      $('.nav-list li').removeClass('li-sticker');
      $('.search').removeClass('search-sticker');
      $('.logo-text').removeClass('logo-text-sticker');
      $('.logo').removeClass('logo-sticker');
  }
});