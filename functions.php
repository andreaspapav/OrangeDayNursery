<?php
//Printing the word function
function printInputWord($inputtedWord,$left1,$top1) {
    echo "<div style =' font: Arial,tahoma,sans-serif;
    					color: #000000;
    					font-size:5vw;
    					position: absolute;
    					left: $left1;
    					top: $top1';> 
    		$inputtedWord<br> 
    		</div>";
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
