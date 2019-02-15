<?php
    //de API://

   
    if(! isset($_GET['r'])){
      $pokeIndex = 25;
    }else{
      $pokeIndex = $_GET['r'];
    }
    

    $url = "https://pokeapi.co/api/v2/pokemon/" . $pokeIndex;

    $json = file_get_contents($url);

    //de variable name nadat JSON decode omzet://
    $pokemon = json_decode($json);  
    
    //eigen text://
   
    
    echo "Who's that Pokémon?";
    echo "<br>";
    
    
    //haal het plaatje op op uit de variable//
    echo '<img id="sprite" src= "' . $pokemon -> sprites -> front_default . '" height="75%" width="75%" > ';
    echo "<br>";
   
    echo '<p id="pokeName"> Its... ';
    //haal de naam van de pokemon op uit het array in de api//     
    echo '<span id="name">' . $pokemon -> forms[0] -> name . '</span>' ; 
    echo '</p>'
  
  ?>
    