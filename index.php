<?php
  $continents = [
        'Africa' => [
            'Mammuthus columbi',
            'Panthera pardus' ,
            'Gazella dorcas',
            'Scorpiones',
            'Pan paniscus',
            'Hippotigris',
            'Diceros bicornis',
            'Hippopotamus amphibius',
            'Giraffa camelopardalis',
            'Loxodonta'
            ],  

        'Asia' => [
            'Neofelis nebulosa',
            'Panthera leo persica',
            'Cuon alpinus',
            'Sus barbatus',
            'Alligator sinensis',
            'Grus japonensis',
            'Ailurus fulgens',
            'Tarsius',
            'Draco',
            'Pteropus'
            ]            
            ];

            $first = [];
            $second = [];
foreach ($continents as $continent => $all_animals) {
    foreach ($all_animals as $key => $animals) {
       $part = explode(' ', $animals);
       if(count($part) === 2){
        $first[] = $part[0];
        $second[] = $part[1];
       }
    }

}

$name_two_words = [];
shuffle($second);
foreach ($second as $key => $value) { 
} 
    for($key = 0; $key < count($first); $key++){ 
        $name_two_words[] = $first[$key].' '.$second[$key]; 
  
} 

?>
<!DOCTYPE html>
  <html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Строки, массивы и объекты</title>
  </head>
  <body>
  <?php
    echo '<pre>';
    var_dump($name_two_words);
    echo '</pre>';
   ?>
  </body>
</html>
