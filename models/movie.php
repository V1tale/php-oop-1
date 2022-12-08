<?php

class Movie {
    public $name;
    public $duration;
    public $genres;
    public $year;
    public $language;
    public $cast;
    public $description;
    public $cover;
    
    function getGenre() {

    }

    function __construct( string $name, array $genres, string $language, string $year, string $duration, string $cover, array $cast, string $description,) {

        $this->name = $name;
        $this-> genres = $genres;
        $this->language = $language;
        $this->year =$year;
        $this->duration = $duration;
        $this->description = $description;
        $this->cast = $cast;
        $this->cover =$cover;
    }
}


?>