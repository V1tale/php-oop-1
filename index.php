<?php
require_once __DIR__ . "/models/movie.php";

$genres = [
    0 =>("drama"),
    1 =>("comedy"),
    2 =>("action"),
    3 =>("superheroes")
];
$forrestGump = new Movie("Forrest Gump", $genres, "english", "1994", "2.25hr", "", "");
var_dump($forrestGump);
$theTrumanShow = new Movie("The Truman Show", $genres, "english", "1998", "1.43hr", "", "");
var_dump($theTrumanShow);
$deadpool = new Movie("Deadpool", $genres, "english", "2016", "2.05hr", "", "");
var_dump($deadpool);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <div id="app">
        <main>
            <section>
                <div class="container">
                    <ul>
                        <!-- <?php foreach ($XXXX as $XXXX); { ?>                         

                            <li>
                                <div class="box">
                                    </div>
                                </li>
                                <?php } ?> -->
                    </ul>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
