<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<?php
use \Statickidz\GoogleTranslate;
function printletterinverted($letter){
    if(ctype_digit($letter)){
        $path = "CSS/img/start/alphabet/inverted/".$letter.'.png';
        $path2 = "CSS/img/start/alphabet/inverted/".$letter.'.png';
    }else{
        $path = "CSS/img/start/alphabet/inverted/".$letter.'.png';
        $path2 = "CSS/img/start/alphabet/inverted/".$letter.$letter.'.png';
    }

    echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 82%; left:10%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$letter.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path.'"/>
	</div>';
     echo '<div style="border: 0px solid black; width: 10vw ; height: 17vh ; position: absolute; top: 82%; left:80%; resize: both;">
            <img onclick=\'responsiveVoice . speak("'.$letter.'");\' style= "width: 100%; height: 100%; "  border="0" src="'.$path2.'"/>
    </div>';
}

function printnuminverted($num,$letter){
    $path = "CSS/img/start/alphabet/inverted/".$num.'.png';
    $path2 = "CSS/img/start/alphabet/inverted/".$letter.'.png';
    $path3 = "CSS/img/start/alphabet/inverted/".$letter.$letter.'.png';

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

?>