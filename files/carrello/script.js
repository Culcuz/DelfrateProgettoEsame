$('.terms button').on('click', function() {
  $(".review").hide();
  $(".agreed").show();
  $(".complete button").removeAttr("disabled");
});

$('.agreed').on('click', function() {
  $(".review").show();
  $(".agreed").hide();
  $(".complete button").attr("disabled","disabled");
});

$('button.remove').on('click', function(){
  $(this).parent().velocity({
    translateX: "-800px",
    opacity: 0
  },{
    duration: 500,
    complete: function(elem) {
      $(elem).addClass("deleted");
    },
    easing: [ 0.65, -0.02, 0.72, 0.29 ] 
  });
});
