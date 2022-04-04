


// wrapped in additional function to bypass the 'Uncaught TypeError: $ is not a function'
(function($){


// HAMBURGER SLIDE DOWN MENU

  // 1. when we click the hamburger, run a function
// 2. inside the function, we are going to add/remove the class of open
// 3. make sure our link doesn't jump to the top


$('.menu-toggle').on('click', function(){
    $('.menu').toggleClass('open')
    return false
  })





// 1. when we scroll, we want to run a function
// 2. we want to figure out how far down the page we have scrolled
// 3. we want to display the pixels weve scrolled inside of our progress.div

// document is a javascript keyword that refers to the entire html page




$(document).on('scroll', function() {

  // the scrollTop method gives us back a pixel value for how far
  // it is to the top of the page )from our current scroll position)
  const pixelsFromTop = $(document).scrollTop()
  // $('.progress').text(pixelsFromTop + ' pixels from top')
  
// HIDES HEADER WITH SCROLL
  if (pixelsFromTop > 80) {
    $('header').addClass('hidden')
  } else {
    $('header').removeClass('hidden')
  };

// CHANGES BACKGROUND COLOUR OF BODY WITH SCROLL
if (pixelsFromTop < 600) {
    $('body').css('background-color', '#ffffff')
  } else if (pixelsFromTop < 1400) {
    $('body').css('background-color', '#a29c97')
  } else if (pixelsFromTop < 2200) {
    $('body').css('background-color', '#d9dfe4')
  } else if (pixelsFromTop < 3000) {
    $('body').css('background-color', '#fff0f0')
  } else {
    $('body').css('background-color', '#cdccc7')
  };

// CHANGES WIDTH OF PROGRESS BAR WITH SCROLL
// make variables for documentHeight and windowHeight
 var documentHeight = $(document).height()
 var windowHeight = $(window).height()
  // variable to work out difference between the two
  var difference = documentHeight - windowHeight
  // get this as a percentage
  var percentage = 100 * pixelsFromTop / difference
  // use that percentage to change the width property of the bar in css
  $('.bar').css('width', percentage + '%')
  
})


// EXTRA
// This bit of code below gives us a div with no of pixels from top in it
// when linked up with html div and css fixing it top and left

// $(document).on('scroll', function() {
//   const pixelsFromTop = $(document).scrollTop()
//   $('.progress').text(pixelsFromTop + ' pixels from top')
// })


})(jQuery);