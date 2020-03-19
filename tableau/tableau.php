<?php
$heros = [
    0 => [
        'nom' => 'green lantern',
        'univers' => 'DC',
        'pouvoirs' => ['voler','creer','immuniser a la peur',],
        'humain' => false,
    ],
    1 => [
        'nom' => 'spider-man',
        'univers'=>'Marvel',
        'pouvoirs'=> ['grimpe', 'sens de laraignée'],
        'humain' => true,
    ],[
        'nom' => 'batman',
        'univers' => 'DC',
        'pouvoirs' => ['riche','intelligent','scenario',],
        'humain' => true,
    ],[
        'nom' => 'colossus',
        'univers' => 'Marvel',
        'pouvoirs' => ['blindé','fort','inoxidable',],
        'humain' => true,
    ]
    ]; 
    foreach ($heros as $hero){
        echo $hero['nom'] . ' <br> ' ;
        foreach($hero['pouvoirs'] as $power ){
            echo $power. '<br>';
        }

        if($hero['humain'] == true){
                echo 'humain'. '<br>';
        }   
        else
        {
                echo 'extraterrestre'. '<br>';
        }
        echo $hero['univers']. '<br>';
            
    }
    
       
    
        
   