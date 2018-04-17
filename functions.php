<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<?php
//Printing the word function
function printInputWord($inputtedWord,$left1,$top1) {
    if(strlen($inputtedWord) < 10){$size = 4.5;$dif = 0;}
    elseif(strlen($inputtedWord) < 20){$size = 2;$dif = 1.5;}
    elseif(strlen($inputtedWord) < 40){$size = 1.5;$dif = 3;}
    else{$size = 1;$dif = 4.5;}
    $top1 = strval($top1 + $dif)."%";
    echo "<div style =' font: Arial,tahoma,Comic Sans MS;
                        color: #000000;
                        font-size:".$size."vw;
                        position: absolute;
                        left: $left1;
                        top: $top1';> 
            $inputtedWord<br> 
            </div>";
}

function printletter($letter){
    if(ctype_digit($letter)){
        $path = "CSS/img/start/alphabet/".$letter;
        $path2 = "CSS/img/start/alphabet/".$letter;
    }else{
        $path = "CSS/img/start/alphabet/".$letter;
        $path2 = "CSS/img/start/alphabet/".$letter.$letter;
    }


    echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 82%; left:77%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$letter.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path2.'"/>
	</div>';
    echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 82%; left:10%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$letter.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path.'"/>
	</div>';
}

function speakbox($word,$lang,$width,$height,$top,$left){
    switch($lang){
        case "en":
            $la = "UK English Female";
            break;
        case "fr":
            $la = "French Female";
            break;
        case "ja":
            $la = "Japanese Female";
            break;
        case "el":
            $la = "Greek Female";
            break;
        case "de":
            $la = "Russian Female";
            break;
        case "es":
            $la = "Spanish Female";
            break;
        case "it":
            $la = "Italian Female";
            break;
        default:
            $la = "UK English Male";
    }
    echo '<div style="border: 0px solid black; width: '.$width.'vw ; height: '.$height.'vh ; position: absolute; top: '.$top.'%; left:'.$left.'%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$word.'","'.$la.'");\' style= "width: 100%; height: 100%;"  border="0" src="CSS/img/start/blank.png"/>
    </div>';
}
//Translation function
function translate($text, $from, $to){
    $CLIENT_ID = "zcabjs1@ucl.ac.uk";
    $CLIENT_SECRET = "8f80f44887c04406a0f958d7545e7ab4";
    $postData = array(
        'fromLang' => $from,
        'toLang' => $to,
        'text' => $text);
    $headers = array(
        'Content-Type: application/json',
        'X-WM-CLIENT-ID: '.$CLIENT_ID,
        'X-WM-CLIENT-SECRET: '.$CLIENT_SECRET);
    $url = 'http://api.whatsmate.net/v1/translation/translate';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
//Languages:
//
// "fr": "French"
// "el": "Greek",
// "de": "German"
// "es": "Spanish"
?>