<?php

class Movie {
    public $name;
    public $duration;
    public $genre;
    public $year;
    public $language;
    public $cast;
    public $description;

    function __construct($name, $genre, $language, $year, $duration, $cast, $description) {

        $this->name = $name;
        $this-> genre = $genre;
        $this->language = $language;
        $this->year =$year;
        $this->duration = $duration;
        $this->description = $description;
        $this->cast = $cast;
    }
}

?>