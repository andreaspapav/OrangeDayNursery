<?php

function resize_array($array,$n){
    for($x = 0; $x < $n; $x++){
        $rtn[$x] = $array[rand(0,(count($array) - 1))];
    }
    return $rtn;
}

function filter_images_with_word($images, $word){
    $out = [];
    for($i = 0; $i < count($images); $i++) {
        if (in_array($word,explode(".", $images[$i]))) {
            array_push($out, $images[$i]);
        }
    }
    return $out;
}

function filter_images_with_letter($images, $letter){
    $out = [];
    for($i = 0; $i < count($images); $i++) {
        if ($images[$i][0] == $letter) {
            array_push($out, $images[$i]);
        }
    }
    return $out;
}

function parse_string($string){
    $string = str_replace("black and white", "blackandwhite", $string);
    $string = str_replace("animals", "animal", $string);
    $string = str_replace("badgers", "badger", $string);
    $string = str_replace("balls", "ball", $string);
    $string = str_replace("dogs", "dog", $string);
    $string = str_replace("cats", "cat", $string);
    return $string;
}

function interpret_string($string){
    $string = parse_string($string);
    $images = scandir("images");
    $words = explode(" ", $string);
    if(ctype_digit($words[0])){$start = strlen($words[0]);}else{$start = 0;}
    for($x = $start; $x < count($words); $x++){
        if(strlen($words[$x]) == 1){
            $images = filter_images_with_letter($images, $words[$x]);
        }else{
            $images = filter_images_with_word($images, $words[$x]);
        }

    }
    if(count($images) == 0){return "error";}
    if($start == 1){
        $images = resize_array($images, (int)$words[0]);
    }else{
        $images = resize_array($images, 1);
    }
    return $images;
}

function display_array($array){
    for($i = 0; $i < count($array); $i++){
        $path = ("images/" . $array[$i]);
        echo '<img src="data:image/jpeg;base64,'.base64_encode( file_get_contents($path) ).'"/>';
    }
}

function get_word_from_image($name){
    return explode(".", $name)[0];
}

function change_image($path){
    echo '<div style="width: 40vw ; height: 25vw ; position: absolute; top: 21.5%; left:5.5%; resize: both;"> 
             <img src="'.$path.'"/>
         </div>';
}



