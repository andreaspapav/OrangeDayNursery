

<?PHP
function listen($lang){
    if(isset($_COOKIE["data"])){
        $rtn = $_COOKIE["data"];
        echo "<script> document.cookie = 'data' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';</script>";
        echo '<a href="start.php">
<img src="CSS/img/start/blinkingButton4.png" style="position: absolute; height: 8vh; width: 14vw;top: 2%;left: 40.7%;resize: both;">
</a>';;
        return $rtn;
    }else{
        echo '<img class = \'mic\' src=\'CSS/img/start/blinking_border.png\' id="blinking_frame" style="position: absolute; height: 23vh; width: 32vw;top: 0.7%;left: 33%;resize: both;">';
        echo '<a href="start.php">
<img src="CSS/img/start/blinkingButton3.png" id="button" style="position: absolute; height: 16vh; width: 28vw;top: 5%;left: 35%;resize: both;">
</a>';

        echo "<script>
var recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition)();
recognition.lang = '$lang';
recognition.interimResults = false;
recognition.maxAlternatives = 1;
recognition.start();
recognition.onend = function() {
    recognition.start();
}
recognition.onresult = function(event) {
    document.getElementById(\"button\").src = \"CSS/img/start/working.png\";
    recognition.stop();
    string = (event.results[0][0].transcript);
    document.cookie = ('data=' + string);
    location.reload();
    
};
</script>";
        exit();
}
}
?>
