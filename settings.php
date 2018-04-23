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
    <script src="JS/sound.js"></script>
    <script src="JS/settings.js"></script>
    <!--<script type="text/javascript" src="js/cookies.js"></script>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
     label:hover{
      background-color: orange;
     }
    </style>
    
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

    .container {
    text-align: center;
  
  
}
    .images{
      text-align: center;
      

    }
    input[type="radio"]{
      display: none;
    }
    input[type="radio"]:checked + label {
      color: #49BBCA;
    }

    input[type="radio"]:disabled + label {
      color: grey;
    }

    input[value="en"]{
    width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -30%;
}



    input[type="submit"]{
    width: 80px;
    height: 35px;
    background-color: #f4a460;
    vertical-align: middle;
    position: absolute; 
    top: 20%; 
    right: 30%;
}
   


    </style>

    
    <!-- Sound Scripts -->
    
    <audio loop id="audio">
    <source src="sounds/background_music.mp3" type="audio/mp3">
    </audio>

    

    <!-- SOUND -->
    <script>
    
    function toggleSound(state) {
    var audioElem = document.getElementById('audio');
    if (state == 'on'){
      audioElem.play();
    }
    else
      audioElem.pause();
    }

    </script>


    <!-- COOKIES -->
    <script>
      
    function setCookie(c_name,value,exdays) {
      var exdate=new Date();
      exdate.setDate(exdate.getDate() + exdays);
      var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
      document.cookie=c_name + "=" + c_value;
    }

    function getCookie(name) {
      var re = new RegExp(name + "=([^;]+)");
      var value = re.exec(document.cookie);
      return (value != null) ? unescape(value[1]) : null;
    }


    function checkToggleState(toggle) {
      var name = '#'+toggle;
      var setState = getCookie(toggle);
      if (setState != "") {
        $(name).bootstrapToggle(setState);
      }
    }

    toggleSound(getCookie('musicToggleBtn'));
   </script>


</head>

<body onload="checkToggleState('musicToggleBtn'); checkToggleState('soundFXToggle'); checkToggleState('invertToggle')" scroll="no" style="overflow: hidden">

	<div class= "container">
<!-- Background Page -->
		<img src='CSS/img/settings/background.png' style = "resize: both; height: 100vh; width:100vw; position: absolute; top:0%;left:0%;"> </div>

<!-- Back button upper-left corner -->
		<a class="buttonWithSound" href="index.php"><img src='CSS/img/settings/backButton.png' onmousedown="checkToggleState('soundFXToggle')" onmouseover="this.src='CSS/img/settings/backButtonhover.png';" onmouseout="this.src='CSS/img/settings/backButton.png';"  style="width:12vw;height:6vh;position: absolute;top: 20px;left: 20px;" /></a>
	
<!-- Languages Settings -->
<!-- Select langugage title image -->

<img src="CSS/img/settings/selectLang.jpg" style="position: absolute; resize: both; height: 4vh; width: 25vw; top:30% ; left: 24.5%;">


<div class="image">
  <img src="CSS/img/settings/textboxwhite.png" style="position: absolute; resize: both; height: 30vh; width: 27vw; top:34% ; left: 24%;">
  <img src="CSS/img/settings/langBG.jpg" style="position: absolute; resize: both; height: 28vh; width: 12vw; top:35.5% ; left: 57%;">
  <img src="CSS/img/settings/line.png" style="position: absolute; resize: both; height: 0.5vh; width: 13vw; top:48.5% ; left: 31%; transform: rotate(90deg);"> </div>
<!-- Select Voice langugage title image -->
<img src="CSS/img/settings/voiceLang.jpg" style="position: absolute; resize: both; height: 4.2vh; width: 25vw; top:30% ; left: 50.5%;">

<form id="myForm" method = "post" action = "submit_settings.php">

 <input  type = "radio" name="lang1" id="english1" value="en">
 <label for="english1" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 37.5%; 
  left: 27.75%;">ENGLISH</label><br>


 <input type = "radio"  name="lang1" id="french1" value="fr" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -47.5%;">
  <label for="french1" style=" vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;
  font-size: 1.6vw;position: absolute; top: 42.5%; left: 27.75%;">FRENCH</label><br>

 <input type = "radio" name="lang1" id="italian1" value="it" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -38.5%;">
  <label for="italian1" style=" vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;
  font-size: 1.6vw;position: absolute; top: 47.5%; left: 27.75%;">ITALIAN</label><br>

 <input type = "radio"  name="lang1" id="german1" value="de" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -37.5%;">
  <label for="german1" style=" vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;
  font-size: 1.6vw;position: absolute; top: 52.5%; left: 27.75%;">GERMAN</label><br>

 <input type = "radio" name="lang1" id="spanish1" value="es" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -29.5%;">
  <label for="spanish1" style=" vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;
  font-size: 1.6vw;position: absolute; top: 57.5%; left: 27.75%;">SPANISH</label><br>



<input type = "radio"  name="lang2" id="english2" value="en" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -29.5%;">
  <label for="english2" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 37.5%; 
  left: 39.25%;">ENGLISH</label><br>

<input type = "radio"  name="lang2" id="french2" value="fr" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -45.5%;">
  <label for="french2" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 42.5%; 
  left: 39.25%;">FRENCH</label><br>

<input type = "radio"  name="lang2" id="italian2" value="it" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -34.5%;">
  <label for="italian2" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 47.5%; 
  left: 39.25%;">ITALIAN</label><br>

<input type = "radio"  name="lang2" id="german2" value="de" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -26.2%;">
  <label for="german2" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 52.5%; 
  left: 39.25%;">GERMAN</label><br>

<input type = "radio"  name="lang2" id="spanish2" value="es" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -35.5%;">
  <label for="spanish2" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 57.5%; 
  left: 39.25%;">SPANISH</label><br>


<!--Choose voice lang-->
 <input type = "radio"  name="lang3" id="english3" value="en" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -29.5%;">
  <label for="english3" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 37.5%; 
  left: 58.75%;">ENGLISH</label><br>

<input type = "radio"  name="lang3" id="french3" value="fr" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -45.5%;">
  <label for="french3" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 42.5%; 
  left: 58.75%;">FRENCH</label><br>

<input type = "radio"  name="lang3" id="italian3" value="it" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -36%;">
  <label for="italian3" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 47.5%; 
  left: 58.75%;">ITALIAN</label><br>

<input type = "radio"  name="lang3" id="spanish3" value="es" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -27.2%;">
  <label for="spanish3" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 57.5%; 
  left: 58.75%;">SPANISH</label><br>

<input type = "radio"  name="lang3" id="german3" value="de" style="width: 24px;
    height: 24px;
    vertical-align: middle;
    position: absolute; 
    top: -10%; 
    right: -35.5%;">
  <label for="german3" style="vertical-align: middle;line-height: 24px;margin: 2px 0;display: block;height: 24px;font-size: 1.6vw;position: absolute;top: 52.5%; 
  left: 58.75%;">GERMAN</label><br>





<input type="submit" value="SAVE" style="width: 7vw; height: 6vh; font-size: 1.6vw;font-weight: bold; left: 63%; top:21%;" multiple >
</form>

<?php
  $settings=json_decode(file_get_contents('settings.json'));
?>

<script>
  $("#myForm input[type='radio'][name='lang1']").each(function() {
    $(this).prop("checked", $(this).val() == '<?php echo $settings->lang1; ?>');
  });

  $("#myForm input[type='radio'][name='lang2']").each(function() {
    $(this).prop("checked", $(this).val() == '<?php echo $settings->lang2; ?>');
  });

  $("#myForm input[type='radio'][name='lang3']").each(function() {
    $(this).prop("checked", $(this).val() == '<?php echo $settings->lang3; ?>');
  });

  $("#myForm input[type='radio'][name='lang1']").each(function() {
    $(this).prop("disabled", $(this).val() == '<?php echo $settings->lang3; ?>');
  });

  $("#myForm input[type='radio'][name='lang2']").each(function() {
    $(this).prop("disabled", $(this).val() == '<?php echo $settings->lang3; ?>');
  });
</script>




<!-- Translate Language list box 
<div class="images">
<img src="CSS/img/settings/langBG.jpg" style="position: absolute; resize: both; height: 28vh; width: 12vw; top:35% ; left: 31.5%;"> </div>-->
<!-- Translate Language list box 
<img src="CSS/img/settings/langBG.jpg" style="position: absolute; resize: both; height: 28vh; width: 12vw; top:35% ; left: 56.5%;"> -->



<!-- Toggles Labels Images -->
<img src="CSS/img/settings/musicSet.jpg" style="position: absolute; resize: both; height:6.5vh; width: 14vw; top: 70.5%; left: 24.4%;">
<!-- Sound FX -->
<img src="CSS/img/settings/soundFXSet.jpg" style="position: absolute; resize: both; height:6.5vh; width: 14vw; top: 70.7%; left: 43%;">
<!-- Invert Color -->
<img src="CSS/img/settings/invertColorSet.jpg" style="position: absolute; resize: both; height:6.5vh; width: 14vw; top: 70.6%; left: 61.5%;">
<!-- Line split -->
<img src="CSS/img/settings/line.png" style="position: absolute; resize: both; height: 0.5vh; width: 44vw; top:68%; left:28%; opacity: 0.8;">

<!-- Toggles -->
<style>
  .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px;  }
  .toggle.ios .toggle-handle { border-radius: 20px; }
</style>

    <!-- Music -->
    <div class="checkbox" style="resize: both; position: absolute; top: 76.5%; left: 29.75%;">
    <input id="musicToggleBtn" type="checkbox" data-toggle="toggle" data-style="ios" data-onstyle="success" data-on=" " data-off=" ">
    </div>

    <script>
    $(function() {
    $('#musicToggleBtn').change(function() {
      var nameM = 'musicToggleBtn';
      var state = 'on';
      if(musicToggleBtn.checked) {
        state = 'on';
        toggleSound(state);
      } else {
        state = 'off';
        toggleSound(state);
      }
      setCookie('musicToggleBtn', state , 1);
      })
    })
    </script>


    <!-- Sound FX -->
    <div class="checkbox" style="resize: both; position: absolute; top: 76.5%; left: 48%;">
    <input id="soundFXToggle" type="checkbox" data-toggle="toggle" data-style="ios" data-onstyle="success" data-on=" " data-off=" ">
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

    

  </script>

    <!-- Invert Color -->
    <div class="checkbox" style="resize: both; position: absolute; top: 76.5%; left: 66.3%;">
    <input id="invertToggle" type="checkbox" unchecked data-toggle="toggle" data-style="ios" data-onstyle="success" data-on=" " data-off=" ">
    </div>

    <script>
    $(function() {
    $('#invertToggle').change(function() {
      var nameM = 'invertToggle';
      var state = 'on';
      if(invertToggle.checked) {
        state = 'on';
        window.location.href='/OrangeDay/settingsinverted.php';
      } else {
        state = 'off';
        window.location.href='/OrangeDay/settings.php';
      }
      setCookie('invertToggle', state , 1);
      })
    })
    </script>


  
<!-- Translation Languages 
<h2 id = "en" style="font-size: 1.9vw;position: absolute; top: 34.5%; left: 32.75%;">ENGLISH</h2></a>
<a href="settings.php"><h2 id = "fr" style="font-size: 2.1vw;position: absolute; top: 38.5%; left: 32.75%;" onclick = "activateFrench();">FRENCH</h2></a>
<a href="settings.php"><h2 id = "it" style="font-size: 2.1vw;position: absolute; top: 42.5%; left: 32.75%;" onclick = "activateItalian();">ITALIAN</h2></a>
<a href="settings.php"><h2 id = "el" style="font-size: 2.1vw;position: absolute; top: 46.5%; left: 32.75%;" onclick = "activateGreek();">GREEK</h2></a>
<a href="settings.php"><h2 id = "es" style="font-size: 2.1vw;position: absolute; top: 50.5%; left: 32.75%;"onclick = "activateSpanish();">SPANISH</h2></a>
<a href="settings.php"><h2 id = "de" style="font-size: 2.1vw;position: absolute; top: 54.5%; left: 32.75%;" onclick = "activateGerman();">GERMAN</h2></a> --> 



<!--
<script>
  var elementIsClicked = false; // declare the variable that tracks the state
  function clickHandler(){ // declare a function that updates the state
  elementIsClicked = true;
}

var element = document.getElementById('en'); // grab a reference to your element
element.addEventListener('click', clickHandler); 

   
</script>-->


<!-- Voice Recognition Languages 
<a href="settings.php"><h2 style="font-size: 2.1vw;position: absolute; top: 34.5%; left: 57.8%;">ENGLISH</h2>
<a href="settings.php"><h2 style="font-size: 2.1vw;position: absolute; top: 38.5%; left: 57.8%;">FRENCH</h2>
<a href="settings.php"><h2 style="font-size: 2.1vw;position: absolute; top: 42.5%; left: 57.8%;">ITALIAN</h2>
<a href="settings.php"><h2 style="font-size: 2.1vw;position: absolute; top: 46.5%; left: 57.8%;">GREEK</h2>
<a href="settings.php"><h2 style="font-size: 2.1vw;position: absolute; top: 50.5%; left: 57.8%;">SPANISH</h2>
<a href="settings.php"><h2 style="font-size: 2.1vw;position: absolute; top: 54.5%; left: 57.8%;">GERMAN</h2> -->

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
