$(document) .ready(function(){
    $("#hide") .click(function(){
        $("p") .hide();
    });
$("#show").click(function(){

  $("p") .show();
});
});

//slide effect ....

$(document).ready(function(){
  $(".flip").dblclick(function(){
    $(".slider").css({"display": "block", "background-color":"green"});
  });
  $(".flip").click(function(){
    $(".slider").css({"display": "none"});
  });
});


//fullscreen nav

function openNav() {
document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
document.getElementById("myNav").style.width = "0%";
}



  $(document).ready(function(){
$(".menu_toggle"). on("click", function(){
  $("nav ul").toggleClass("showing");
});
});
$(window).on("scroll",function(){
  if($(window).scrollTop()){
    $('nav').addClass('black');
  }else{
    $('nav').removeClass('black')}

});
