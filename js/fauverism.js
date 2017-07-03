$(document).ready(function() {
  $('p:empty').remove();
  $('.twitter').on('hover', function() {
    $('.twitter').addClass('boom'); 
  });
});
