<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Orange Day Nursery - The App</title>
    <link rel="shortcut icon" href="CSS/img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <linl rel="stylesheet" type="text/css" href="CSS/style_settings.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="js/cookies.js"></script>
    
    <style>
    /* Popover */
    .popover{
    width:200px;
    height:160px;    
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
    
    <audio loop id="audio">
    <source src="sounds/background_music.mp3" type="audio/mp3">
    </audio>

    <script>	
    var mainButton = new Audio();
    mainButton.src = 'sounds/button_click_settings&help.mp3';
    
    function toggleSound(state) {
    var audioElem = document.getElementById("audio");
    if (state == 'on'){
      audioElem.play();
    }
    else if (state == 'off'){
      audioElem.pause();
    }
    else{
      break;
    }
  }

    </script>

    <!-- COOKIES -->
    <script>
      
    function setCookie(c_name,value,exdays)
    {
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
    }

    function getCookie(name)
    {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
    }


    function checkToggleState(toggle) {
    var name = '#'+toggle;
    var setState = getCookie(toggle);
    if (setState != "") {
      $(name).bootstrapToggle(setState)
    }
    }

    function checkToggleStateMusic() {
    var name = '#musicToggleBtn';
    var setState = getCookie('musicToggleBtn');
    if (setState != "") {
      $('#musicToggleBtn').bootstrapToggle(setState)
    }
    toggleSound(setState);
    }

    </script>

</head>

<body onload="checkToggleStateMusic();checkToggleState('soundFXToggle');checkToggleState('invertToggle')" scroll="no" style="overflow: hidden">

	<div>
<!-- Background Page -->
		<img src='CSS/img/settings/background.png' style = "resize: both; height: 100vh; width:100vw; position: absolute; top:0%;left:0%;">

<!-- Back button upper-left corner -->
		<a href="index.php" onmousedown="mainButton.play();"><img src='CSS/img/settings/backButton.png' onmouseover="this.src='CSS/img/settings/backButtonhover.png';" onmouseout="this.src='CSS/img/settings/backButton.png';"  style="width:12vw;height:6vh;position: absolute;top: 20px;left: 20px;" /></a>
	</div>

<a href="activateEnglish"> <h2 class = "english"> ENGLISH </h2> </a>
<a href="activateGerman"> <h2 class = "german"> GERMAN</h2></a>
<a href="activateFrench"> <h2 class = "french"> FRENCH </h2> </a>
<a href="activateGreek"> <h2 class = "greek"> GREEK </h2> </a>
<a href="activateSpanish"> <h2 class = "spanish"> SPANISH </h2> </a>

<!-- Languages Settings -->
<!-- Select langugage title image -->
<img src="CSS/img/settings/selectLang.jpg" style="position: absolute; resize: both; height: 4vh; width: 25vw; top:30% ; left: 24.5%;">
<!-- Select Voice langugage title image -->
<img src="CSS/img/settings/voiceLang.jpg" style="position: absolute; resize: both; height: 4.2vh; width: 25vw; top:30% ; left: 50.5%;">
<!-- Translate Language list box -->
<img src="CSS/img/settings/langBG.jpg" style="position: absolute; resize: both; height: 28vh; width: 12vw; top:35% ; left: 31.5%;">
<!-- Translate Language list box -->
<img src="CSS/img/settings/langBG.jpg" style="position: absolute; resize: both; height: 28vh; width: 12vw; top:35% ; left: 56.5%;">

<!-- Toggles Labels Images -->
<!-- Music -->
<img src="CSS/img/settings/musicSet.jpg" style="position: absolute; resize: both; height:6.5vh; width: 14vw; top: 67.5%; left: 24.4%;">
<!-- Sound FX -->
<img src="CSS/img/settings/soundFXSet.jpg" style="position: absolute; resize: both; height:6.5vh; width: 14vw; top: 67.7%; left: 43%;">
<!-- Invert Color -->
<img src="CSS/img/settings/invertColorSet.jpg" style="position: absolute; resize: both; height:6.5vh; width: 14vw; top: 67.6%; left: 61.5%;">
<!-- Line split -->
<img src="CSS/img/settings/line.png" style="position: absolute; resize: both; height: 0.5vh; width: 44vw; top:65%; left:28%; opacity: 0.8;">

<!-- Toggles -->
<style>
  .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px;  }
  .toggle.ios .toggle-handle { border-radius: 20px; }
</style>

    <!-- Music -->
    <div class="checkbox" style="resize: both; position: absolute; top: 73.5%; left: 29.75%;">
    <input id="musicToggleBtn" type="checkbox" data-toggle="toggle" data-style="ios" data-onstyle="success" data-on=" " data-off=" ">
    </div>

    <script>
    $(function() {
    $('#musicToggleBtn').change(function() {
      var nameM = 'musicToggleBtn';
      var state = 'on';
      var audioElem = document.getElementById('audio');
      if(musicToggleBtn.checked) {
        state = 'on';
        audioElem.play();
      } else {
        state = 'off';
        audioElem.pause();
      }
      setCookie('musicToggleBtn', state , 1);
      })
    })
    </script>

    <!-- Sound FX -->
    <div class="checkbox" style="resize: both; position: absolute; top: 75.5%; left: 48%;">
    <input id="soundFXToggle" type="checkbox" checked data-toggle="toggle" data-style="ios" data-onstyle="success" data-on=" " data-off=" ">
    </div>

     <script>
    $(function() {
    $('#soundFXToggle').change(function() {
      var nameM = 'soundFXToggle';
      var state = 'on';
      if(soundFXToggle.checked) {
        state = 'on';
        //TURN MUSIC ON CODE
      } else {
        state = 'off';
        //TURN MUSIC OFF CODE
      }
      setCookie('soundFXToggle', state , 1);
      })
    })
    </script>

    <!-- Invert Color -->
    <div class="checkbox" style="resize: both; position: absolute; top: 75.5%; left: 66.3%;">
    <input id="invertToggle" type="checkbox" unchecked data-toggle="toggle" data-style="ios" data-onstyle="success" data-on=" " data-off=" ">
    </div>

    <script>
    $(function() {
    $('#invertToggle').change(function() {
      var nameM = 'invertToggle';
      var state = 'on';
      if(invertToggle.checked) {
        state = 'on';
        //TURN MUSIC ON CODE
      } else {
        state = 'off';
        //TURN MUSIC OFF CODE
      }
      setCookie('invertToggle', state , 1);
      })
    })
    </script>

<!-- Translation Languages -->
<h2 id = "english" style="font-size: 2.1vw;position: absolute; top: 34.5%; left: 32.75%;">ENGLISH</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 38.5%; left: 32.75%; color: darkblue;">FRENCH</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 42.5%; left: 32.75%;">ITALIAN</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 46.5%; left: 32.75%;">GREEK</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 50.5%; left: 32.75%;">SPANISH</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 54.5%; left: 32.75%;">GERMAN</h2>

<!-- Voice Recognition Languages -->
<h2 style="font-size: 2.1vw;position: absolute; top: 34.5%; left: 57.8%;">ENGLISH</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 38.5%; left: 57.8%;">FRENCH</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 42.5%; left: 57.8%;">ITALIAN</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 46.5%; left: 57.8%;">GREEK</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 50.5%; left: 57.8%;">SPANISH</h2>
<h2 style="font-size: 2.1vw;position: absolute; top: 54.5%; left: 57.8%;">GERMAN</h2>

<!-- Help Popup -->
<div style="resize: both; height: 9vh; width:5vw; position: absolute; top:0% ;left:95%;"">

<a href="#" id="helppopup" title="INSTRUCTIONS" data-trigger="focus"> <img src="CSS/img/HelpButton.png" style="resize: both; height: 9vh; width:5vw; "></a>

<div id="my-popover-container" style="display: none;">
    <p>- Click the MAIN MENU button to go back.
    <br />- Select the languages by clicking on them.
    <br />- Click on the toogles to turn ON/OFF.
  </p>
</div>

</div>

<script type="text/javascript">
  $('#helppopup').popover({
    placement: 'bottom',
    html: true,
    content: function() {
      return $('#my-popover-container').html();
    }
});
</script>

</body>
</html>
