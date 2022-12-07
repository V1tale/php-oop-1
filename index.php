<?php


class Movie {
    public $name;
    public $duration;
    public $genre;
    public $year;
    public $language;
    public $description;

    function __construct($name, $genre, $language, $year, $duration, $description) {

        $this->name = $name;
        $this-> genre = $genre;
        $this->language = $language;
        $this->year =$year;
        $this->duration = $duration;
        $this->description = $description;
    }
}

$forrestGump = new Movie("Forrest Gump", "drama", "english", "1994", "2.25hr", "");
var_dump($forrestGump);
?>

