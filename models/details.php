<?php
// GENRES ARRAY
$genres = array("drama", "comedy", "action", "superheroes", "adventures");
// var_dump($genres);

// FORREST GUMP
$forrestGumpDescription = "Lui la ama, ma lei non lo accetta perchè disabile. Lui ci riprova ancora, ma lei lo rifiuta. Quando poi lui la ritrova, molti anni dopo, lei ha un figlio, ma è malata di cancro e solo allora, lei lo accetta.";
$forrestGumpCast = array("Tom Hanks", "Robin Wright", "Gary Sinise");
$forrestGump = new Movie("Forrest Gump", [$genres[0], $genres[1]], "english", "1994", "2.25hr", "01", $forrestGumpCast, "$forrestGumpDescription");
// var_dump($forrestGump);

// THE TRUMAN SHOW
$theTrumanShowDescription = "Lui vive su un'isola all'interno di un gigantesco studio cinematografico. Tutto a sua insaputa ed ogni abitante dell'isola, è in realtà un attore. Quando scopre la verità, si imbarca verso i confini del mare e, raggiungendo le pareti, riesce a scappare tramite una porta in cima ad una scalinata che porta nel mare";
$theTrumanShowCast = array("Jim Carrey", "Laura Linney", "Ed Harris");
$theTrumanShow = new Movie("The Truman Show", [$genres[0], $genres[1], $genres[4]], "english", "1998", "1.43hr", "02", $theTrumanShowCast,"$theTrumanShowDescription");
//  var_dump($theTrumanShow);

// DEADPOOL
$deadpoolDescription = "Lui è un supereroe, ma uccide molta più gente dei suoi nemici";
$deadpoolCast = array("Ryan Reynolds", "Morena Baccarin", "Gina Carano");
$deadpool = new Movie("Deadpool", [$genres[1], $genres[2], $genres[3]], "english", "2016", "2.05hr", "03", $deadpoolCast,"$deadpoolDescription");
//  var_dump($deadpool);

// MOVIES ARRAY
$movies = array($forrestGump, $theTrumanShow, $deadpool);



?>