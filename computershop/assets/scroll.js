$(document).ready(function(){
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    $('.bottomMenu').fadeIn();
    //window.open("index.html","_self");
  } else {
    $('.bottomMenu').fadeOut();
    window.open("home.html","_self");
  }
});
});
