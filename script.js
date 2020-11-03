$( document ).ready(function() {
    var color = $("#myModal").css( "background-color" );
    var metaThemeColor = document.querySelector("meta[name=theme-color]");
    metaThemeColor.setAttribute("content", color);
});


function enter() {
/*  var video = document.getElementById("player");
  video.play();*/
   var audio = document.getElementById("audio");
  audio.play();
  $('#myModal').slideUp(1000);

}

function control_audio() {
 var audio = document.getElementById("audio");
 var text = $('#mute').text();
 if(text=='volume_off'){
	audio.pause();
	$('#mute').text('volume_up');
 }else{
 	audio.play();
	$('#mute').text('volume_off');
 }
 
}

