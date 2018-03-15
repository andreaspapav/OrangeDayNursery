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

    </script>

      <!-- Sound Scripts -->
    <audio loop id="audio">
    <source src="sounds/background_music.mp3" type="audio/mp3">
    </audio>

    <script>  
    
    var settingsButton = new Audio();
    settingsButton.src = 'sounds/button_click_settings&help.mp3';
    
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

    function checkToggleStateMusic() {
    //var name = '#musicToggleBtn';
    //var setState = getCookie('musicToggleBtn');
    toggleSound('on');
    }

    /*var song = document.getElementsByTagName('audio')[0];
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
 
</head>


<body onload="checkToggleStateMusic();" scroll="no" style="overflow: hidden">


	<div>
<!-- Background Page -->
		<img src='CSS/img/background.png' style = "resize: both; height: 100vh; width:100vw; position: absolute; top:0%;left:0%;"> 

<!-- Start Button -->
		<a href="start.php"onmousedown="settingsButton.play();">
			<img src='CSS/img/StartButton.png' onmouseover="this.src='CSS/img/StartButtonhover.png';" onmouseout="this.src='CSS/img/StartButton.png';" style="position: absolute; top: 65%; left: 37.5%; height: 25vh; width: 28vw; resize: both; overflow: scroll; background-color: transparent;" />
		</a>

<!-- Settings Button upper left corner -->
		<a href="settings.php" onmousedown="settingsButton.play()">
			<img src="CSS/img/SettingsButton.png" style=" resize: both; height:10vh; width: 12vw;position: absolute; top: 2.5%; left: 2.5%;" />
		</a>

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

