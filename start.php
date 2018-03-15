<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Orange Day Nursery - The App</title>
    <link rel="shortcut icon" href="CSS/img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style_start.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
    /* Popover */
    .popover{
    width:200px;
    height:140px;    
    }
    /* Popover Header */
    .popover-title {
      background-color: #c1bfbf;
      color: #000000; 
      font-size: 20px;
      padding: 2px;
      text-align:center;
      font-weight: bold;
      font-family: "Comic Sans MS", cursive, sans-serif;
    }
    /* Popover Body */
    .popover-content {
      background-color: white;
      color: #000000;
      padding: 5px;
      text-align: justify;
      border: 2px solid white;
      border-top-color: black;
      font-family: "Comic Sans MS", cursive, sans-serif;
      line-height: 18px;
      padding-bottom: 1px;
    }
    </style>


  <!-- Sound Scripts -->  
  <script>
      var mainButton = new Audio();
      mainButton.src = 'sounds/button_click_settings&help.mp3';
    
  </script>
  <!-- Autoplay on load function -->
    <script>
    $(document).ready(function() {
    $("#my_audio").get(0).play();
    });

    var micSound = new Audio();
    micSound.src = 'sounds/microphone_button.mp3';

  </script>

  <script>
  function changeImage(word){
    var x = document.getElementById("wordImage");
    var v = 'images/' + word;
    x.setAttribute("src",v);
  }

  </script>

	<audio id="my_audio" src="sounds/microphone_button.mp3"> </audio>

</head>

<body scroll="no" style="overflow: hidden">


<!-- Background Page -->
<img src='CSS/img/start/background.png' style = "background-size: cover; resize: both; height: 100vh; width: 100vw; position: absolute; top:0%;left:0%; border: 2px solid black;">
<!-- Box middle -->
<img src='CSS/img/start/box.png' style = "position: absolute; top: 81% ; left: 2% ; height: 20vh; width: 47vw; resize: both;">

<!-- Box left-->
<img src='CSS/img/start/boxPink.png' style = "position: absolute; top: 65.5% ; left: 0.5% ; height: 12.5vh; width: 25vw; resize: both;">

<!-- Box right -->
<img src='CSS/img/start/boxPink.png' style = "position: absolute; top: 65.5% ; left: 25% ; height: 12.5vh; width: 25vw; resize: both;">

<!-- Arrow left -->
<img src='CSS/img/start/arrowLeft.png' style = " position: absolute; height: 8vh; width: 3.5vw; top: 76.2%; left: 12%; resize: both;"/>
<!-- Arrow right -->
<img src='CSS/img/start/arrowRight.png' style = " position: absolute; height: 8vh; width: 3.5vw; top: 76.2%; left: 38%; resize: both;"/>

<!-- Letter the word starts from -->
<img src='CSS/img/start/alphabet/a.png' style = " position: absolute; height: 15vh; width: 10.5vw; top: 4%; left:13%; resize: both;"/>

<!-- Back button upper-left corner -->

	<a href="index.php" onmousedown="mainButton.play();">
		<img src='CSS/img/start/backButton.png' onmouseover="this.src='CSS/img/start/backButtonhover.png';" onmouseout="this.src='CSS/img/start/backButton.png';" style="height:6vh; width: 12vw; position: absolute;top: 20px;left: 20px;">
	</a>

<!-- Blinking frame -->

<img class = 'mic' src='CSS/img/start/blinking_border.png' id="blinking_frame" style="position: absolute; height: 24.5vh; width: 31.5vw;top: -2.5%;left: 35%;resize: both;">

<!-- Blinking Button center -->
<a href="start.php">
<img src='CSS/img/start/blinkingButton3.png' style="position: absolute; height: 17vh; width: 28vw;top: 2%;left: 36.7%;resize: both;">
</a>

<!-- Frames for images of word to appear in
<div style="border: 2px solid black; width: 40vw ; height: 25vw ; position: absolute; top: 21.5%; left:5.5%; resize: both;"></div>
<div style="border: 2px solid black; width: 24vw ; height: 18vw ; position: absolute; top: 21.5%; right:24.6%; resize: both;"></div>
<div style="border: 2px solid black; width: 24vw ; height: 18vw ; position: absolute; top: 21.5%; right:0.5%; resize: both;"></div>
<div style="border: 2px solid black; width: 24vw ; height: 18vw ; position: absolute; top: 60%; right:24.6%; resize: both;"></div>
<div style="border: 2px solid black; width: 24vw ; height: 18vw ; position: absolute; top: 60%; right:0.5%; resize: both;"></div>
-->

<!-- Help Popup -->
<div style="resize: both; height: 9vh; width:5vw; position: absolute; top:0% ;left:95%;"">
<a href="#" id="helppopup" title="INSTRUCTIONS" data-trigger="focus"> <img src="CSS/img/HelpButton.png" style="resize: both; height: 9vh; width:5vw; "></a>
<div id="my-popover-container" style="display: none;">
    <p>- Click the MAIN MENU button to go back.
    <br />- Click the I AM LISTENING BUTTON to speak again!
  </p>
</div>
</div>
<script>
  $('#helppopup').popover({
    placement: 'bottom',
    html: true,
    content: function() {
      return $('#my-popover-container').html();
    }
});
</script>

<?php
include 'functions.php';
include 'listen.php';
include 'fileread.php';

function displayImageMain($path){
    $path = "images/" . $path;
    if(getimagesize($path)[0] > getimagesize($path)[1]*1.6){
        echo '<div style="border: 2px solid black; width: 40vw ; height: 25vw ; position: absolute; top: 21.5%; left:5.5%; resize: both;">
            <img style="width: 100%;"  border="0" src="data:image/jpeg;base64,'.base64_encode( file_get_contents($path) ).'"/>
	</div>';
    }else{
        echo '<div style="border: 2px solid black; width: 40vw ; height: 25vw ; position: absolute; top: 21.5%; left:5.5%; resize: both;">
            <img style="height: 100%;"  border="0" src="data:image/jpeg;base64,'.base64_encode( file_get_contents($path) ).'"/>
	</div>';
    }
}
function displayImage($path,$width,$height,$top,$right){
    $path = "images/" . $path;
    if(getimagesize($path)[0] > getimagesize($path)[1]*($width/$height)){$scaler = "width";}else{$scaler = "height";}
    echo '<div style="border: 2px solid black; width: '.$width.'vw ; height: '.$height.'vw ; position: absolute; top: '.$top.'%; right:'.$right.'%; resize: both;">
            <img style="'.$scaler.': 100%;"  border="0" src="data:image/jpeg;base64,'.base64_encode( file_get_contents($path) ).'"/>
	</div>';
}

function voiceRecognition(){
$lang = "en";
$in = listen();
$paths = interpret_string($in);

$toLang1 = "fr";
$toLang2 = "ja";

$inputWord = $in;
$translatedWord1 = translate($inputWord,$lang,$toLang1);
$translatedWord2 = translate($inputWord,$lang,$toLang2);

printInputWord($in,"6%","83%");
printInputWord($translatedWord1,"2%","65%");
printInputWord($translatedWord2,"26%","65%");

displayImageMain($paths[0]);
displayImage($paths[1],24,18,21.5,24.6);
displayImage($paths[2],24,18,21.5,0.5);
displayImage($paths[3],24,18,60,24.6);
displayImage($paths[4],24,18,60,0.5);
}

voiceRecognition();
?>
<!-- Content will go here -->
</body>
</html>