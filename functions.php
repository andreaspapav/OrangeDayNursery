<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<?php
use \Statickidz\GoogleTranslate;
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
                        text-transform: lowercase;
                        left: $left1;
                        top: $top1';> 
            $inputtedWord<br> 
            </div>";
}

function printletter($letter){
    if(ctype_digit($letter)){
        $path = "CSS/img/start/alphabet/".$letter.'.png';
        $path2 = "CSS/img/start/alphabet/".$letter.'.png';
    }else{
        $path = "CSS/img/start/alphabet/".$letter.'.png';
        $path2 = "CSS/img/start/alphabet/".$letter.$letter.'.png';
    }

    echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 82%; left:10%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$letter.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path.'"/>
	</div>';
     echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 82%; left:80%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$letter.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path2.'"/>
    </div>';
}

function printnum($num,$letter){
    $path = "CSS/img/start/alphabet/".$num.'.png';
    $path2 = "CSS/img/start/alphabet/".$letter.'.png';
    $path3 = "CSS/img/start/alphabet/".$letter.$letter.'.png';

    echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 82%; left:7.5%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$num.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path.'"/>
    </div>';
    
    echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 82%; left:79%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$letter.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path2.'"/>
    </div>';

    echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 84%; left:86.5%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$letter.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path3.'"/>
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
    require_once ('vendor/autoload.php');


    $trans = new GoogleTranslate();
    $result = $trans->translate($from, $to, $text);

    return $result;
}


//Languages:
//
// "fr": "French"
// "el": "Greek",
// "de": "German"
// "es": "Spanish"
?>