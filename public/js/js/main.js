
function googleTranslateElementInit() {
  new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
}

function translateLanguage(lang) {
  googleTranslateElementInit();
  var $frame = $('.goog-te-menu-frame:first');
  if (!$frame.size()) {
    alert("Error: Could not find Google translate frame.");
    return false;
  }
  $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
  return false;
}

$(function(){
  $('.selectpicker').selectpicker();
});

jQuery(document).ready(function ($) {

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Stick the header at top on scroll
  $("#header").sticky({
    topSpacing: 0,
    zIndex: '50'
  });

  // Intro background carousel
  $("#intro-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    loop: true,
    animateOut: 'fadeOut',
    items: 1
  });
  let colorItems = $(".color-item")
  //تعريف المتغيير
  
  
  $("#sideBarToggle").click(function(){
    let colorBoxWidth = $(".color-box").outerWidth(true);
  
    if( $("#sideBar").css("left")=="0px")
    {
        $("#sideBar").animate({left:`-${colorBoxWidth}`} , 1500);
    }
    else
    {
        $("#sideBar").animate({left:`0px`} , 1500);
    }
  })
  
  
  // Initiate the wowjs animation library
  new WOW().init();

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function (e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function (e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function (e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (!$('#header').hasClass('header-fixed')) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });


  // Porfolio - uses the magnific popup jQuery plugin
  $('.portfolio-popup').magnificPopup({
    type: 'image',
    removalDelay: 300,
    mainClass: 'mfp-fade',
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300,
      easing: 'ease-in-out',
      opener: function (openerElement) {
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 4
      },
      900: {
        items: 6
      }
    }
  });


});

// form validation for taslema form in services

let nameInput = document.getElementById("nameInput");
let emailInput = document.getElementById("emailInput");
let phoneNumInput = document.getElementById("phoneNumInput");
let inputNameAlert = document.getElementById("inputNameAlert");
let inputEmailAlert =document.getElementById("inputEmailAlert");
let inputNumAlert =document.getElementById("inputNumAlert");
let textAreaInput = document.getElementById("textAreaInput");
//validation name///
function validateUserName() {
    let regex = /^[A-Z][a-z]{2,30}$/;
    if (regex.test(nameInput.value) == true) {
        inputNameAlert.classList.replace("d-block" , "d-none");
    } 
    else
     {
        inputNameAlert.classList.replace("d-none" , "d-block");
    }
}
nameInput.addEventListener("keyup", function(){
    validateUserName(nameInput.value);
})
//validation email//
function validateUserEmail() {
    let regex = /^[a-zA-Z0-9]{2,20}@[a-z]{2,12}.([a-z]{2,12})$/;;
    if (regex.test(emailInput.value) == true) {
        inputEmailAlert.classList.replace("d-block" , "d-none");
    } 
    else
     {
        inputEmailAlert.classList.replace("d-none" , "d-block");
    }
}
emailInput.addEventListener("keyup", function(){
    validateUserEmail(emailInput.value);
})
//validation phone num //
function validateUserNum() {
    let regex =  /^(002)?01(1|0|5|2)[0-9]{8}$/;
    if (regex.test( phoneNumInput.value) == true) {
        inputNumAlert.classList.replace("d-block" , "d-none");
    } 
    else
     {
        inputNumAlert.classList.replace("d-none" , "d-block");
    }
}
phoneNumInput.addEventListener("keyup", function(){
    validateUserNum( phoneNumInput.value);
})




$('textarea').keypress(function () {
    
    let counter = (textAreaInput.value).length;
    if (counter < 100) {
        $(".count").text(100 - (counter += 1) + "lemted words");
    } else {
        $(".count").text("finished");
        this.value = this.value.substring(0, max);
    }
});
