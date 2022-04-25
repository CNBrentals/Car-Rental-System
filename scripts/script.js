$(document).ready(function(){
$('#slide>#one:gt(0)').hide(); 
 setInterval(function() {
    $('#slide > #one:first')
      .fadeOut(3000)
      .next()
      .fadeIn(3000)
      .end()
      .appendTo('#slide');
  }, 5000);
});
