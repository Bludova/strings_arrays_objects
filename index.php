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

foreach ($continents as $continent => $all_animals) {
    foreach ($all_animals as $key => $animals) {
       $parts = explode(' ', $animals);
       if(count($parts)=== 2){
         $comma_separated = implode(",", $parts);
         $str = str_replace(',', ' ', $comma_separated);
           $name_two_words[] = $str;
       }
    }

}
foreach($name_two_words as $name){
    $part = explode(' ', $name);
    $first[] = $part[0];
    $second[] = $part[1];
}
shuffle($second);

 $final_result = [];
 
for($i = 0; $i < count($name_two_words); $i++){
    $final_result[]= $first[$i]." ".$second[$i];  
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
    var_dump($final_result);
    echo '</pre>';
   ?>
  </body>
</html>
