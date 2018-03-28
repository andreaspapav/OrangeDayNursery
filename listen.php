<?PHP
function listen(){
    if(isset($_COOKIE["data"])){
        $rtn = $_COOKIE["data"];
        echo "<script> document.cookie = 'data' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';</script>";
        return $rtn;
    }else{
        echo "<script>
var recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition)();
recognition.lang = 'en-UK';
recognition.interimResults = false;
recognition.maxAlternatives = 5;
recognition.start();
recognition.onresult = function(event) {
    string = (event.results[0][0].transcript);
    document.cookie = ('data=' + string);
    location.reload();
};
</script>";
        exit();
}
}
?>