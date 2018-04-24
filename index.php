<!DOCTYPE html>
<html lang="en">
    <head>
	  <title>Orange Day Nursery - The App</title>
    <link rel="shortcut icon" href="CSS/img/logo.png">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<linl rel="stylesheet" type="text/css" href="CSS/style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
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
     toggleSoundFx(getCookie('soundFxToggle'));


    </script>

      <!-- Sound Scripts -->
    <audio loop id="audio">
    <source src="sounds/background_music.mp3" type="audio/mp3">
    </audio>
 
    <script>
    var settingsButton = new Audio();
    settingsButton.src = 'sounds/button_click_settings&help.mp3';
    </script>



<script>
   /*
    var song = document.getElementsByTagName('audio')[0];
    var played = false;
    var tillPlayed = getCookie('timePlayed');
    function update()
    {
      if(!played){
        if(tillPlayed){
          song.currentTime = tillPlayed;
          song.play();
          played = true;
          }
        else {
          song.play();
          played = true;
              }
          }
      else {
        setCookie('timePlayed', song.currentTime);
           }
    }*/
  </script>
  <script>
    
    function toggleSound(state) {
    var audioElem = document.getElementById('audio');
    if (state == 'on'){
      audioElem.play();
    }
    else
      audioElem.pause();
    }

    function toggleSoundFx(state) {
    var audioElem = document.getElementById('mainButton');
    if (state == 'on'){
      audioElem.play();
    }
    else
      audioElem.pause();
    }


    </script>
  <script>
  $(document).ready(function() {
    toggleSound(getCookie('musicToggleBtn'));
  $("#theapp").animate({left: "+=70%"}, 1500);
  //$("#b").animate({left: "-=300"}, 1000);
  });

</script>
 
</head>


<body onload="checkToggleState('musicToggleBtn') checkToggleState('soundFxToggle')" scroll="no" style="overflow: hidden">




	<div>
<!-- Background Page -->
		<img src='CSS/img/background.jpg' style = "resize: both; height: 100vh; width:100vw; position: absolute; top:0%;left:0%;"> 

<!-- Animated Butterflies -->
    <img src="CSS/img/butterfly.gif" style ="resize: both; height:20vh; width:12vw; position: absolute; top:52%;left:77%">
    <img src="CSS/img/butterfly2.gif" style ="resize: both; height:13vh; width:7vw; position: absolute; top:56%;left:88%">

<!-- Animated Letters -->
    <img src="CSS/img/letters.gif" style ="resize: both; height:22vh; width:28vw; position: absolute; top:45%;left:1%">

<!-- Animated Sun -->
    <img class = 'mic' src="CSS/img/sun.png" style ="resize: both; height:30vh; width:18vw; position: absolute; top:4.7%;left:76.5%">

<!-- Start Button -->
		<a href="start.php"onmousedown="settingsButton.play();">
			<img src='CSS/img/StartButton.png' onmouseover="this.src='CSS/img/StartButtonhover.png';" onmouseout="this.src='CSS/img/StartButton.png';" style="position: absolute; top: 65%; left: 37.5%; height: 25vh; width: 28vw; resize: both; overflow: scroll; background-color: transparent;" />
		</a>

<!-- Settings Button upper left corner -->
		<a href="settings.php" onmousedown="checkToggleState('soundFxToggle')">
			<img src="CSS/img/SettingsButton.png" style=" resize: both; height:10vh; width: 12vw;position: absolute; top: 2.5%; left: 2.5%;" />
		</a>

	</div>

<!-- The App Fly in -->
    <div id="theapp" style="resize: both; position:absolute; top: 29%; left:-24%;height:15vh; width: 20vw;">
        <img src="CSS/img/theapp.png" style=" position:absolute; resize: both; height:20vh; width: 28vw;">
    </div>



<!-- Help Popup -->
<div style="resize: both; height: 9vh; width:5vw; position: absolute; top:0% ;left:95%;"">

<a href="#" id="helppopup" title="INSTRUCTIONS" data-trigger="focus"> <img src="CSS/img/HelpButton.png" style="resize: both; height: 9vh; width:5vw; "></a>

<div id="my-popover-container" style="display: none;">
    <p>- Click the START button and speak!
    <br />- Click the settings button on the top left corner to access the settings of the App.</p>
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
<!-- Content will go here -->


</body>
</html>

