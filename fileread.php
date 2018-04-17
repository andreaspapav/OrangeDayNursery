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

include 'convert.php';

function parse_string($string){
    $string = strtolower($string);
    $string = str_replace("black and white", "blackandwhite", $string);
    $string = str_replace("one", "1", $string);
    $string = str_replace("two", "2", $string);
    $string = str_replace("three", "3", $string);
    $string = str_replace("four", "4", $string);
    $string = str_replace("five", "5", $string);
    $string = str_replace("six", "6", $string);
    $string = str_replace("seven", "7", $string);
    $string = str_replace("eight", "8", $string);
    $string = str_replace("nine", "9", $string);
    $string = str_replace("ten", "10", $string);
    $string = str_replace("night time","nighttime" , $string);
    $string = str_replace("baby bird","babybird" , $string);
    $string = str_replace("fire engine","fireengine" , $string);
    $string = str_replace("emergency service","emergencyservices" , $string);
    $string = str_replace("clown fish","clownfish" , $string);
    $string = str_replace("dik dik","dikdik" , $string);
    $string = str_replace("sloth bear","slothbear" , $string);
    $string = str_replace("spectacled bear","spectacledbear" , $string);
    $string = str_replace("polar bear","polarbear" , $string);
    $string = str_replace("bumble bee","bumblebee" , $string);
    $string = str_replace("honey bee","honeybee" , $string);
    $string = str_replace("painted lady","paintedlady" , $string);
    $string = str_replace("monarch butterfly","monarchbutterfly" , $string);
    $string = str_replace("peacock butterfly","peacockbutterfly" , $string);
    $string = str_replace("atlantic ghost crab","atlanticghostcrab" , $string);
    $string = str_replace("fiddler crab","fiddlercrab" , $string);
    $string = str_replace("ghost crab","ghostcrab" , $string);
    $string = str_replace("halloween crab","halloweencrab" , $string);
    $string = str_replace("hermit crab","hermitcrab" , $string);
    $string = str_replace("american robin","americanrobin" , $string);
    $string = str_replace("blue tit","bluetit" , $string);
    $string = str_replace("collared dove","collareddove" , $string);
    $string = str_replace("guinea fowl","guineafowl" , $string);
    $string = str_replace("long-tailed tit","longtailtit" , $string);
    $string = str_replace("long tail tits","longtailtit" , $string);
    $string = str_replace("red cardinal","redcardinal" , $string);
    $string = str_replace("umbrella bird","umbrellabird" , $string);
    $string = str_replace("wood pigeon","woodpigeon" , $string);
    $string = str_replace("broad bean","broadbean" , $string);
    $string = str_replace("brussels sprout","brusselssprout" , $string);
    $string = str_replace("brussel sprout","brusselsprout" , $string);
    $string = str_replace("sweet corn","sweetcorn" , $string);
    $string = str_replace("sweet potato","sweetpotato" , $string);
    $string = str_replace("kiwi fruit","kiwifruit" , $string);
    $string = str_replace("ugli fruit","uglifruit" , $string);
    $string = str_replace("ugly fruit","uglifruit" , $string);
    $string = str_replace("thing","" , $string);
    $string = str_replace("beginning","" , $string);
    $string = str_replace("with","" , $string);
    $string = str_replace("the","" , $string);
    $string = str_replace("letter","" , $string);

    $string = str_replace("something","" , $string);
    $string = str_replace("start","" , $string);
    $string = str_replace("that","" , $string);

    $string = str_replace("brazil nut","brazilnut" , $string);
    $string = str_replace("veggie burger","veggieburger" , $string);
    $string = str_replace("mushroom burger","mushroomburger" , $string);
    $string = str_replace("chocolate cake","chocolatecake" , $string);
    $string = str_replace("raspberry cake","raspberrycake" , $string);
    $string = str_replace("strawberry cake","strawberrycake" , $string);
    $string = str_replace("chocolate chip muffin","chocolatechipmuffin" , $string);
    $string = str_replace("chocolate muffin","chocolatemuffin" , $string);
    $string = str_replace("chocolate pudding","chocolatepudding" , $string);
    $string = str_replace("potato chips","potatochips" , $string);
    $string = str_replace("currant bun","currantbun" , $string);


    return $string;
}

function interpret_string($string){
    $string = parse_string($string);
    $images = scandir("images");
    $words = explode(" ", $string);
    $new = [];
    for($x = 0; $x < count($words); $x++){
        if($words[$x] != ""){
            array_push($new,$words[$x]);
        }

    }
    $words = $new;
    $oldwords = $words;
    $max = 1;
    $i = new Inflect();
    for($n = 0; $n < count($words); $n++){$words[$n] = $i::singularize($words[$n]);}
    if($words !== $oldwords){$max = 3;}



    if(ctype_digit($words[0])){$start = 1;}else{$start = 0;}
    for($x = $start; $x < count($words); $x++){
            if(strlen($words[$x]) == 1){
                $images = filter_images_with_letter($images, $words[$x]);
            }else{
                $images = filter_images_with_word($images, $words[$x]);
            }

    }
    if(count($images) == 0){return "error";}
    if($start == 1){
        $images = resize_array($images, min((int)$words[0],10));
    }else{
        $images = resize_array($images, $max);
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



