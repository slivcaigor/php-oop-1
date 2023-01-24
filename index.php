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

$movie1 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994, 8.5, ["Drama", "Crime"]);
$movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972, 10, ["Crime", "Drama"]);

echo "<h2>Title: " . $movie1->getTitle() . "</h2>";
echo "<h3>Director: " . $movie1->getDirector() . "</h3>";
echo "<h3>Release Year: " . $movie1->getReleaseYear() . "</h3>";
echo "<h3>Rating: " . $movie1->getRating() . "</h3>";
echo "<h3>Genre: " . $movie1->getGenres() . "</h3>";

echo "<br>";

echo "<h2>Title: " . $movie2->getTitle() . "</h2>";
echo "<h3>Director: " . $movie2->getDirector() . "</h3>";
echo "<h3>Release Year: " . $movie2->getReleaseYear() . "</h3>";
echo "<h3>Rating: " . $movie2->getRating() . "</h3>";
echo "<h3>Genre: " . $movie2->getGenres() . "</h3>";