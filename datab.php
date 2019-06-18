<?php
$arrayGiocatori=[];

//Funzione che mi generi il codice del giocatore
function generateRandomCode($lettereCodice,$numeriCodice){
  $codiceProvvisorio='';

  for ($i=0; $i < $lettereCodice ; $i++) {
    $codiceProvvisorio = $codiceProvvisorio . chr(rand(97,122));
  }

  $codiceGiocatore = strtoupper($codiceProvvisorio);

  for ($i=0; $i < $numeriCodice; $i++) {
    $codiceGiocatore .= rand(0,9);
  }
  return $codiceGiocatore;
};

//Funzione che mi calcola un dato relativo a punti, falli e rimbalzi in maniera casuale
function generatePointReboundsFauls($min,$max){
  return rand($min,$max);
};


for ($g=0; $g < 100; $g++) {
  do {
    $giocatore=[
      "codiceGiocatore"=> generateRandomCode(3,3),
      "puntiFatti"=> generatePointReboundsFauls(1,50),
      "rimbalzi"=> generatePointReboundsFauls(1,20),
      "falli"=> generatePointReboundsFauls(1,12),
      "tiri2"=> generatePointReboundsFauls(1,52),
      "tiri3"=> generatePointReboundsFauls(1,40)
    ];
  } while (in_array($giocatore["codiceGiocatore"],$arrayGiocatori));

  $arrayGiocatori[]=$giocatore;
}


?>
