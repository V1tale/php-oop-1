<?php
require_once __DIR__ . "/models/movie.php";

$genres = [
    new genre("drama"),
    new genre("comedy")
];
$forrestGump = new Movie("Forrest Gump", $genres, "english", "1994", "2.25hr", "", "");
var_dump($forrestGump);
$theTrumanShow = new Movie("The Truman Show", "comedy", "english", "1998", "1.43hr", "", "");
var_dump($theTrumanShow);
$deadpool = new Movie("Deadpool", "action", "english", "2016", "2.05hr", "", "");
var_dump($deadpool);
?>
