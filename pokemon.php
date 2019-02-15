<?php
    //de API://
    $url = "https://pokeapi.co/api/v2/pokemon/25";

    $json = file_get_contents($url);

    //de variable name nadat JSON decode omzet://
    $pokemon = json_decode($json);  
    // card styling://
    echo '<div class="card debug">';
    //eigen text://
    echo "<br>";
    echo "Who's that Pokémon?";
    echo "<br>";
    //haal het plaatje op op uit de variable//
    echo '<img src= "' . $pokemon -> sprites -> front_default . '" height="40%" width="20%"> ';
    echo "<br>";
    echo "It's: ";
    //haal de naam van de pokemon op uit het array//     
    echo $pokemon -> forms[0] -> name;
    echo "<br>";
  ?>
    