

$( document ).ready(function() {


// скролл к форме
  $("main").on("click","a", function (event) {
    event.preventDefault();

    var id  = $(this).attr('href'),

        top = $(id).offset().top;

    $('body,html').animate({scrollTop: top}, 1800);
    // $('#username-2').focus();
  });

   $('.reviews__slick').slick({
      autoplay: false,
      autoplaySpeed: 1500,
      speed: 1000,
      centerMode: true,
      centerPadding: '0px',
      dots: false,
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
    });



   setTimeout(function() {
     $('.wellcome__button-desc').html('Наличие наборов по акции: <b class="b-mid">6шт</b>');
  }, 3000);

   setTimeout(function() {
     $('.wellcome__button-desc').html('Наличие наборов по акции: <b class="b-mid">5шт</b>');
  }, 8000);

   setTimeout(function() {
     $('.wellcome__button-desc').html('Наличие наборов по акции: <b class="b-mid">4шт</b>');
  }, 9000);

   setTimeout(function() { 
     $('.wellcome__button-desc').html('Наличие наборов по акции: <b class="b-low">2шт</b>');
  }, 16000);

});


// background-image: url(../img/much.png);