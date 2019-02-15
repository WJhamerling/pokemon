pokemonName = 'pikachu';

function random_nr() {
    var randomNumber = Math.floor((Math.random() * 807) + 1);
    console.log(document.getElementById('searchBar').value);

    GetInfoFromDatabase("getData.php?r=" + randomNumber, showData);
    // document.getElementById("name").style.display = "hidden";
}

function showData(data) {
    //console.log(data.responseText);
    var HTMLElement = document.getElementById('pokemonPlaceholder');
    //console.log(HTMLElement);
    HTMLElement.innerHTML = data.responseText;

    pokemonName = document.getElementById('name').innerHTML;
    console.log(pokemonName);
}

function GetInfoFromDatabase(url, outputData) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            outputData(this);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}
var comparebutton = document.getElementById('compareBtn');
var nextPokemon = document.getElementById('nextPokemon');
var sprite = document.getElementsByClassName("flexbox_2_1");


comparebutton.addEventListener("click", compareText);
nextPokemon.addEventListener("click", nextPokeBlack);

function compareText(){
    var sprite = document.getElementsByClassName("flexbox_2_1");
    var name = document.getElementById("name");
    var textB = document.getElementById('searchBar').value;
    console.log(textB);

    var textA = name.innerHTML;

    if(textA == textB){
        name.style.display = "block";
        sprite[0].style.filter = "brightness(100%)";
    }
}

function nextPokeBlack(){
    sprite[0].style.filter = "brightness(0%)";
}
//searchBarValue 

var textB = document.getElementById('searchBar').value;
console.log(textB);

var textA = document.getElementById("name").innerHTML;
//De naam van die pokemon
//pokemonName


// console.log(compareText("Appel", "Peer"));

// console.log(compareText("Appel", "Appel"));

// var searchBarValue = document.getElementById('searchBar').value;

// if(searchBarValue == ... ){
//     GOED GERADEN!
// }else{
//     FOUT!
// }

//var HTMLElement = document.getElementById('pokemonPlaceholder');
//HTMLElement.innerHTML = data.responseText;
console.log("pokename: "+pokeName);
