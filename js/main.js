// 1. when we click the hamburger, run a function
// 2. inside the function, we are going to add/remove the class of open
// 3. make sure our link doesn't jump to the top
// wrapped in additional function to bypass the 'Uncaught TypeError: $ is not a function'

(function($){

$('.menu-toggle').on('click', function(){
    $('.menu').toggleClass('open')
    return false
  })

})(jQuery);