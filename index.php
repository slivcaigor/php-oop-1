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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function getReleaseYear(): string
    {
        return $this->releaseYear;
    }

    public function getRating(): string
    {
        return $this->rating;
    }
    public function getGenres(): string
    {
        return implode(', ', $this->genres);
    }
}