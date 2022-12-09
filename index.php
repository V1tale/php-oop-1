<?php
require_once __DIR__ . "/models/movie.php";
require_once __DIR__ . "/models/details.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <?php foreach ($movies as $content) { ?>                         
                        <div class="col-4">
                            <div class="box">       
                                <h2><?php echo($content->name);?></h2>
                                <div class="top d-flex align-items-start">
                                    <img src="img/<?php echo($content->cover); ?>.jpg" alt="">
                                    <div class="info">
                                        <div class="details">
                                            <h3>Details:</h3>
                                            <h4 class="text-secondary">Year: <?php echo($content->year);?></h4>
                                            <h4 class="text-secondary">Duration: <?php echo($content->duration);?></h4>
                                            <h4 class="text-secondary">Language: <?php echo($content->language);?></h4>
                                        </div>
                                        <div class="genre" >
                                            <h3>Genres: </h3>
                                            <?php 
                                        foreach ($content->genres as  $thisGenre) { ?>
                                        <h4 class="text-secondary"> <?php echo ($thisGenre);?></h4>
                                        
                                        <?php } ?>
                                        </div>
                                        <div class="cast">
                                            <h3>Cast:</h3>
                                            <?php foreach ($content->cast as  $thisCast) { ?>
                                            <h4 class="text-secondary"><?php echo ($thisCast);?></h3>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="description">
                                    <h3>Description:</h3>
                                    <h4><?php echo($content->description);?></h4>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
