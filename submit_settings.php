<?php  

file_put_contents('settings.json', json_encode([
    'lang1' => $_POST['lang1'],
    'lang2' => $_POST['lang2'],
    'lang3' => $_POST['lang3']
  
]));

header( 'Location: https://orangedaynurserytheapp.azurewebsites.net/settings.php' ) ;
?>
