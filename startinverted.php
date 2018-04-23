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
    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    <style>
        body, html {
            cursor: url(cursor.png), pointer;
            height: 100%;
        }
    /* Popover */
    .popover{
    width:200px;
    height:140px;    
    }
   /* Popover Header */
    .popover-title {
      background-color: grey;
      color: white; 
      font-size: 20px;
      padding: 2px;
      text-align:center;
      font-weight: bold;
      font-family: "Comic Sans MS", cursive, sans-serif;
    }
    /* Popover Body */
    .popover-content {
      background-color: black;
      color: white;
      padding: 5px;
      text-align: justify;
      border: 2px solid black;
      border-top-color: white;
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
<img src='CSS/img/start/backgroundinverted.png' style = "background-size: cover; resize: both; height: 100vh; width: 100vw; position: absolute; top:0%;left:0%; border: 2px solid black;">

<!-- Arrow left -->
<img src='CSS/img/start/arrowLeftinverted.png' style = " position: absolute; height: 8vh; width: 3.5vw; top: 81.2%; left: 30.2%; resize: both;"/>
<!-- Arrow right -->
<img src='CSS/img/start/arrowRightinverted.png' style = " position: absolute; height: 8vh; width: 3.5vw; top: 81.2%; left: 66.2%; resize: both;"/>

<!-- Box middle -->
<img src='CSS/img/start/boxinverted.png' style = "position: absolute; top: 87% ; left: 23% ; height: 12.5vh; width: 54vw; resize: both;">

<!-- Box left-->
<img src='CSS/img/start/boxPinkinverted.png' style = "position: absolute; top: 71.5% ; left: 0.5% ; height: 12.5vh; width: 35vw; resize: both;">


<!-- Box right -->

<img src='CSS/img/start/boxPinkinverted.png' style = "position: absolute; top: 71.5% ; left: 64% ; height: 12.5vh; width: 35vw; resize: both;">


<?php
$settings=json_decode(file_get_contents('settings.json'));

$toLang1 = $settings->lang1;
$toLang2 = $settings->lang2;
$inlang = $settings->lang3;

echo '<img src="CSS/img/start/flags/'.$inlang.'inverted.png" style = "position: absolute; top: 88.5% ; left: 25.1% ; height: 9vh; width: 8vw; resize: both;">';
echo '<img src=\'CSS/img/start/flags/'.$toLang1.'inverted.png\' style = "position: absolute; top: 73.0% ; left: 1.9% ; height: 9vh; width: 8vw; resize: both;">';
echo '<img src=\'CSS/img/start/flags/'.$toLang2.'inverted.png\' style = "position: absolute; top: 73.0% ; left: 65.4% ; height: 9vh; width: 8vw; resize: both;">';
?>


<!-- Letter the word starts from
<img src='CSS/img/start/alphabet/a.png' style = " position: absolute; height: 15vh; width: 10.5vw; top: 4%; left:13%; resize: both;"/>
-->
<!-- Back button upper-left corner -->

	<a href="indexinverted.php" onmousedown="mainButton.play();">
		<img src='CSS/img/start/backButtoninverted.png' onmouseover="this.src='CSS/img/start/backButtonhoverinverted.png';" onmouseout="this.src='CSS/img/start/backButtoninverted.png';" style="height:6vh; width: 12vw; position: absolute;top: 20px;left: 20px;">
	</a>

<!-- Blinking frame

<img class = 'mic' src='CSS/img/start/blinking_border.png' id="blinking_frame" style="position: absolute; height: 11.5vh; width: 15.6vw;top: 0%;left: 40%;resize: both;">
-->
<!-- Blinking Button center
<a href="start.php">
<img src='CSS/img/start/blinkingButton3.png' style="position: absolute; height: 8vh; width: 14vw;top: 2%;left: 40.7%;resize: both;">
</a>
--><!--
<div style="border: 2px solid black; width: 16vw ; height: 30vh ; position: absolute; top: 11%; left:2%; resize: both;"></div>
<div style="border: 2px solid black; width: 16vw ; height: 30vh ; position: absolute; top: 11%; left:18.5%; resize: both;"></div>
<div style="border: 2px solid black; width: 16vw ; height: 31vh ; position: absolute; top: 42%; left:2%; resize: both;"></div>
<div style="border: 2px solid black; width: 16vw ; height: 31vh ; position: absolute; top: 42%; left:18.5%; resize: both;"></div>
<div style="border: 2px solid black; width: 30vw ; height: 25vh ; position: absolute; top: 11%; left:35%; resize: both;"></div>
<div style="border: 2px solid black; width: 30vw ; height: 30vh ; position: absolute; top: 11%; left:67%; resize: both;"></div>
<div style="border: 2px solid black; width: 16vw ; height: 31vh ; position: absolute; top: 42%; left:65.5%; resize: both;"></div>
<div style="border: 2px solid black; width: 16vw ; height: 31vh ; position: absolute; top: 42%; left:82%; resize: both;"></div>
<div style="border: 2px solid black; width: 30vw ; height: 25vh ; position: absolute; top: 37%; left:35%; resize: both;"></div>
<div style="border: 2px solid black; width: 30vw ; height: 25vh ; position: absolute; top: 63%; left:35%; resize: both;"></div>




<!-- Help Popup -->
<div style="resize: both; height: 9vh; width:5vw; position: absolute; top:0% ;left:95%;"">
<a href="#" id="helppopup" title="INSTRUCTIONS" data-trigger="focus"> <img src="CSS/img/HelpButtoninverted.png" style="resize: both; height: 9vh; width:5vw; "></a>
<div id="my-popover-container" style="display: none;">
    <p>- Click the MAIN MENU button to go back.
    <br />- Click the TRY AGAIN BUTTON to speak again!
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
include 'functionsinverted.php';
include 'listen.php';
include 'fileread.php';

function displayImage($name,$width,$height,$top,$left,$pos){
    $path = "images/" . $name;
    if(getimagesize($path)[0] < getimagesize($path)[1]*($width/$height)){$scaler = "width";}else{$scaler = "height";}
    echo '<div style="border: 0px solid black; width: '.$width.'vw ; height: '.$height.'vh ; position: absolute; top: '.$top.'%; left:'.$left.'%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.explode(".",$name)[$pos].'");\' style= "max-width: 100%; max-height: 100%;"  border="0" src="data:image/jpeg;base64,'.base64_encode( file_get_contents($path) ).'"/>
	</div>';

}

function voiceRecognition()
{


    $settings=json_decode(file_get_contents('settings.json'));

    $toLang1 = $settings->lang1;
    $toLang2 = $settings->lang2;
    $inlang = $settings->lang3;


    //$inlang = "fr";
    //$toLang1 = "en";
   // $toLang2 = "en";
    $in = listeninverted($inlang);
    $in = strtolower($in);


    if($inlang == "en"){
        $in = preg_replace('/\bfor\b/', 'four', $in);
        $in = preg_replace('/\bthe\b/', 'three', $in);
        $in = preg_replace('/\bto\b/', 'two', $in);
        $in = preg_replace('/\bthe\b/', 'three', $in);
        $in = str_replace("three letter","the letter",$in);
        $in = preg_replace('/\bsex\b/', 'six', $in);
        $in = preg_replace('/\bquartes\b/', 'quokka', $in);
        $in = preg_replace('/\bavon\b/', 'oven', $in);
        $in = preg_replace('/\bbum\b/', 'bun', $in);
        $in = preg_replace('/\bdick\b/', '', $in);
        $in = preg_replace('/\bcock\b/', '', $in);
        $in = preg_replace('/\bpiss\b/', '', $in);
        $in = preg_replace('/\bcrap\b/', '', $in);
        $in = preg_replace('/\bpenis\b/', '', $in);
        $in = preg_replace('/\bpoo\b/', '', $in);
        $in = preg_replace('/\bfart\b/', '', $in);
        $in = preg_replace('/\bmasturbate\b/', '', $in);
        $in = preg_replace('/\bwank\b/', 'bank', $in);
        $in = preg_replace('/\bdiarrhoea\b/', '', $in);
        $in = preg_replace('/\berection\b/', '', $in);
        $in = preg_replace('/\bpop\b/', 'pup', $in);

        $paths = interpret_string($in);
        $trans = $in;

        }

        else
        {

        $trans = translate($in, $inlang, "en");
        $paths = interpret_string($trans);
        
        }

    $parsed = preg_replace('/\bone\b/', '1', $trans);
    $parsed = preg_replace('/\btwo\b/', '2', $parsed);
    $parsed = preg_replace('/\bthree\b/', '3', $parsed);
    $parsed = preg_replace('/\bfour\b/', '4', $parsed);
    $parsed = preg_replace('/\bfive\b/', '5', $parsed);
    $parsed = preg_replace('/\bsix\b/', '6', $parsed);
    $parsed = preg_replace('/\bseven\b/', '7', $parsed);
    $parsed = preg_replace('/\beight\b/', '8', $parsed);
    $parsed = preg_replace('/\bnine\b/', '9', $parsed);
    $parsed = preg_replace('/\bten\b/', '10', $parsed);
    if(ctype_digit($parsed[0]) and ctype_digit($parsed[1]) and $parsed[2]==" "){
        printnuminverted("10",$parsed[3]);
    }
    elseif(ctype_digit($parsed[0]) and ctype_digit($parsed[1])){
        printletterinverted("10");
    }elseif(ctype_digit($parsed[0]) and $parsed[1]==" "){
        printnuminverted($parsed[0],$parsed[2]);
    }
    elseif ($parsed[0] == 'l' and $parsed[1] == 'e' and $parsed[2] == 't' and $parsed[3] == 't' and $parsed[4] == 'e' and $parsed[5] == 'r' and $parsed[6] == ' ') {
        printletter($parsed[7]);
    }
    else{
        printletterinverted($parsed[0]);
    }







    $inputWord = $trans;
    $translatedWord1 = translate($inputWord, $inlang, $toLang1);
    $translatedWord2 = translate($inputWord, $inlang, $toLang2);

    printInputWord($in, "33.2%", 87);
    speakbox($in,$inlang,50,9,88,25);

    printInputWord($translatedWord1, "10%", 71.5);
    speakbox($translatedWord1,$toLang1,32,9,73,2.5);

    printInputWord($translatedWord2, "73.7%", 72);
    speakbox($translatedWord2,$toLang2,32,9,73,65.5);
    $secondterm = ["dog","dogs","monkey","monkeys","dinosaur","dinosaurs","shop","shops","bear","bears","aeroplane",
        "plane","airport","astronaut","soup","penguin","lemur","lemurs","astronauts","owl","owls","mountain","mountains"
        ,"factory","factories","cathedrals","bridges","palace","palaces","rocket","rockets","boat","boats",
        "cathedral","bridge","whale","whales"];
    $pos = 0;
    foreach(explode(" ",$trans) as $s){
        if(in_array($s,$secondterm)){
            $pos = 1;
        }
    }


    if ($paths == "error"){}
    elseif (count($paths) == 1) {
        displayImage($paths[0], 50, 61, 11, 25,$pos);
    } elseif (count($paths) == 2) {
        displayImage($paths[0], 40, 61, 11, 9,$pos);
        displayImage($paths[1], 40, 61, 11, 51,$pos);
    } elseif (count($paths) == 3) {
        displayImage($paths[0], 30, 61, 11, 2,$pos);
        displayImage($paths[1], 30, 61, 24, 35,$pos);
        displayImage($paths[2], 30, 61, 11, 67,$pos);
    } elseif (count($paths) == 4) {
        displayImage($paths[0], 30, 61, 11, 2,$pos);
        displayImage($paths[1], 30, 35, 11, 35,$pos);
        displayImage($paths[2], 30, 61, 11, 67,$pos);
        displayImage($paths[3], 30, 35, 50, 35,$pos);
    }elseif (count($paths) == 5) {
        displayImage($paths[0], 30, 30, 11, 2,$pos);
        displayImage($paths[1], 30, 31, 42, 2,$pos);
        displayImage($paths[2], 30, 35, 11, 35,$pos);
        displayImage($paths[3], 30, 62, 11, 67,$pos);
        displayImage($paths[4], 30, 35, 50, 35,$pos);
    }elseif (count($paths) == 6) {
        displayImage($paths[0], 30, 30, 11, 2,$pos);
        displayImage($paths[1], 30, 31, 42, 2,$pos);
        displayImage($paths[2], 30, 35, 11, 35,$pos);
        displayImage($paths[3], 30, 30, 11, 67,$pos);
        displayImage($paths[4], 30, 31, 42, 67,$pos);
        displayImage($paths[5], 30, 35, 50, 35,$pos);
    }elseif (count($paths) == 7) {
        displayImage($paths[0], 30, 30, 11, 2,$pos);
        displayImage($paths[1], 30, 31, 42, 2,$pos);
        displayImage($paths[2], 30, 25, 11, 35,$pos);
        displayImage($paths[3], 30, 30, 11, 67,$pos);
        displayImage($paths[4], 30, 31, 42, 67,$pos);
        displayImage($paths[5], 30, 25, 37, 35,$pos);
        displayImage($paths[6], 30, 25, 63, 35,$pos);
    }elseif (count($paths) == 8) {
        displayImage($paths[0], 16, 30, 11, 2,$pos);
        displayImage($paths[1], 16, 30, 11, 18.5,$pos);
        displayImage($paths[2], 30, 31, 42, 2,$pos);
        displayImage($paths[3], 30, 25, 11, 35,$pos);
        displayImage($paths[4], 30, 30, 11, 67,$pos);
        displayImage($paths[5], 30, 31, 42, 67,$pos);
        displayImage($paths[6], 30, 25, 37, 35,$pos);
        displayImage($paths[7], 30, 25, 63, 35,$pos);
    }elseif (count($paths) == 9) {
        displayImage($paths[0], 16, 30, 11, 2,$pos);
        displayImage($paths[1], 16, 30, 11, 18.5,$pos);
        displayImage($paths[2], 30, 31, 42, 2,$pos);
        displayImage($paths[3], 30, 25, 11, 35,$pos);
        displayImage($paths[4], 30, 30, 11, 67,$pos);
        displayImage($paths[5], 16, 31, 42, 65.5,$pos);
        displayImage($paths[6], 16, 31, 42, 82,$pos);
        displayImage($paths[7], 30, 25, 37, 35,$pos);
        displayImage($paths[8], 30, 25, 63, 35,$pos);
    }elseif (count($paths) == 10) {
        displayImage($paths[0], 16, 30, 11, 2,$pos);
        displayImage($paths[1], 16, 30, 11, 18.5,$pos);
        displayImage($paths[2], 16, 31, 42, 2,$pos);
        displayImage($paths[3], 16, 31, 42, 18.5,$pos);
        displayImage($paths[4], 30, 25, 11, 35,$pos);
        displayImage($paths[5], 30, 30, 11, 67,$pos);
        displayImage($paths[6], 16, 31, 42, 65.5,$pos);
        displayImage($paths[7], 16, 31, 42, 82,$pos);
        displayImage($paths[8], 30, 25, 37, 35,$pos);
        displayImage($paths[9], 30, 25, 63, 35,$pos);
    }


}
voiceRecognition();
?>
<!-- Content will go here -->
</body>
</html>