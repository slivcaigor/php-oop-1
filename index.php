<?php

class Movie
{
    public $title;
    public $director;
    public $releaseYear;
    public $rating;
    public $genres;

    public function __construct($title, $director, $releaseYear, $rating, $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
        $this->rating = $rating;
        $this->genres = $genres;
    }

}