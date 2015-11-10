$(document).ready(function(){


	
    $(".toggle-btn").click(function(){         
        $(".menu").slideToggle("slow");
        return false;
    });

    $(window).resize(function(){
    var w = $(window).width();

    if(w > 650 && $(".menu").is(':hidden')) {
        $(".menu").removeAttr('style');
    }
    
 
  
    
});

     

});

$(document).ready(function() {

    $( '.masonry-container' ).masonry( {

     itemSelector: '.content-block'

      } );

});

$(document).ready(function(){
$('#getContent').click(function(){
$.ajax({
url: "content.php",
cache: false,
beforeSend: function() {
$('#divContent').html('Получаем контент');
},
success: function(html){
$("#divContent").html(html);
}
});
return false;
});
});