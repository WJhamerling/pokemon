<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/card.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Who's that Pokémon?</title>
</head>
<body>

<div class="movie_card" id="bright">
  <div class="info_section">
    <div class="movie_header">
      <h1></h1>
      <h4></h4>
      <span class="minutes"></span>
      <p class="type"></p>
    </div>
  <div class="movie_desc">
</div>
       <p class="text">
       <?php 
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
//haal de naam van de pokemon op uit het array in de api//     
echo $pokemon -> forms[0] -> name;
echo "<br>";
?>
      </p>
    </div>
  </div>
  <div class="blur_back bright_back"></div>
</div>

