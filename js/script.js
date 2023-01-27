// NAVBAR STICKY
$(window).scroll(function(){
  if ($(this).scrollTop() > 1){ 
      $('nav').addClass("sticky");
    }
    else{
      $('nav').removeClass("sticky");
    }
});

// CAROUSEL
$(".dropdown-trigger").dropdown();

$(document).ready(function(){
    $('.parallax').parallax();
  });
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
});


//  BOUTON NEXT PREV
$(document).ready(function () {
  $('.carousel.but1').carousel();

  $('#prev').click(function() {
    $('.carousel.carousel-slider').carousel('prev');
  });
  $('#next').click(function() {
    $('.carousel.carousel-slider').carousel('next');
  });
});

//   MODAL
$(document).ready(function(){
  $('.modal').modal();
});

// DARK MODE
function myFunction() {
  $("html").toggleClass("dark");
  $("body").toggleClass("dark"); 
  $("nav").toggleClass("dark");
  $("h2").toggleClass("dark"); 
  $("footer").toggleClass("dark");  
  $("i.fa-brands").toggleClass("dark");
  $("a#prev").toggleClass("dark");
  $("a#next").toggleClass("dark");
  $("p#about-me").toggleClass("dark");
  $("a.about-me").toggleClass("dark");
  $("i.skills-icone").toggleClass("dark");
  $("div.determinate").toggleClass("dark");
  $("div#login").toggleClass("dark");
  $("div#signUp").toggleClass("dark");
  $("span#reverse").toggleClass("dark");
  $("a.btnAdmin").toggleClass("dark");
  $("button#send").toggleClass("dark");
  $("form#contact").toggleClass("dark");
  $("button.del").toggleClass("dark");
  $("button.switch").toggleClass("dark");
  $start.changeImage()
}

// REVERSE
function reverse(){
  $("body").css("transform","scaleX(-1)")
}

function changeImage(){
  
}

$(document).ready(function(){
  $('.collapsible').collapsible();
});

$(document).ready(function(){
  $('.tabs').tabs();
});

