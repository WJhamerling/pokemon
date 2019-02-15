<!DOCTYPE html>
<html>
<title>Who's that Pokémon?</title>


<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="header debug">
        <div class="headerleft debug"></div>
        <div class="headerlogo debug"></div>
        <div class="headerright debug"></div>
    </div>
    <div class="flexbox debug">
        <div class="flexbox_1 debug"></div>
        <div class="flexbox_2 debug"> 
            <div class="flexbox_2_1 " id="pokemonPlaceholder"><?php include "getdata.php"; ?></div>
            <div class="flexbox_2_2 debug"></div>
        </div>
        <div class="flexbox_3 debug"></div>
    </div>
    <div class="flexboxbottom debug">
        <div class="flexboxbottom_1 debug"></div>
        <div class="flexboxbottom_2 debug"><input type=search placeholder=Name..? value="" name="userinput" id="searchBar">
        <button id="compareBtn">Check Your Answer!</button>
        <button id="nextPokemon" onclick="random_nr()">Next Pokémon!</button>
        </div>
        <div class="flexboxbottom_3 debug"></div>
    </div>  
    <script src="js/script.js" type="text/javascript"></script>
</body>

</html>