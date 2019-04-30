function Aanpassen() {
  var tekstKleur = document.getElementById('tekstKleur');
  var achtergrondKleur = document.getElementById('achtergrondKleur')
  var hoogte = document.getElementById('hoogte');
  var breedte = document.getElementById('breedte')
  var tekst = document.getElementById('tekst');

  var input = document.getElementById('tekstInput').value;

  var div = document.getElementById('resultaat');
  var divTekst = document.getElementById('divTekst');

  if (tekstKleur.checked){
    div.style.color = input;
  }
  else if (achtergrondKleur.checked){
    div.style.backgroundColor = input;
  }
  else if (hoogte.checked){
    div.style.height = input + "px";
  }
  else if (breedte.checked){
    div.style.width = input + "px";
  }
  else if (tekst.checked){
    divTekst.innerHTML = input;
  }
}


function uitrekenen(){
  var eersteCijfer = prompt("Vul het eerste cijfer in");
  var tweedeCijfer = prompt("Vul het tweede cijfer in");
  alert(berekenen(eersteCijfer, tweedeCijfer));
}

function berekenen(cijfer1, cijfer2){
  var uitkomst = parseInt(cijfer1) + parseInt(cijfer2);
  return uitkomst;
}

function startTurn(){
  var inputGetal = prompt("Vul een getal in tussen 0 en 9999");
  var randomGetal = Math.floor(Math.random() * 10000);
  console.log(randomGetal);
  var gameActive = true;
  var tries = 1;
  if (inputGetal < 0 || inputGetal > 9999){
    var inputGetal = prompt("Onjuist getal, vul een getal in tussen 0 en 9999");
  } else {
    nextTurn(inputGetal, randomGetal, tries);
  }
}

function nextTurn(getal, randomGetal, tries){
  console.log(tries);
  if (getal == "" || getal == "stop"){
    alert("gestopt");
  }
  else if (getal > randomGetal){
    tries++;
    alert("Je zit te hoog");
    var getal = prompt("Vul een getal in tussen 0 en 9999");
    nextTurn(getal, randomGetal, tries);
  }
  else if(getal < randomGetal){
    tries++;
    alert("Je zit te laag");
    var getal = prompt("Vul een getal in tussen 0 en 9999");
    nextTurn(getal, randomGetal, tries);
  }
  else if(getal == randomGetal){
    tries++;
    alert("Je zit precies goed!");
    alert("Het duurde je " + tries + " keer om het goed te raden");
    gameActive = false;
  }
}
