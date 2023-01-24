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
$movie3 = new Movie("The Dark Knight", "Christopher Nolan", 2008, 9, ["Action", "Crime", "Drama"]);
$movie4 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, 8.9, ["Crime", "Drama"]);
$movie5 = new Movie("The Lord of the Rings: The Return of the King", "Peter Jackson", 2003, 9, ["Adventure", "Fantasy"]);
$movie6 = new Movie("The Good, the Bad and the Ugly", "Sergio Leone", 1966, 8.8, ["Western"]);
$movie7 = new Movie("Forrest Gump", "Robert Zemeckis", 1994, 8.8, ["Drama", "Romance"]);
$movie8 = new Movie("Inception", "Christopher Nolan", 2010, 8.8, ["Action", "Adventure", "Sci-Fi"]);
$movie9 = new Movie("The Matrix", "The Wachowski Brothers", 1999, 8.7, ["Action", "Sci-Fi"]);
$movie10 = new Movie("Goodfellas", "Martin Scorsese", 1990, 8.7, ["Crime", "Drama"]);

$movies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6, $movie7, $movie8, $movie9, $movie10];

foreach ($movies as $movie) {
    echo "<h2>Title: " . $movie->getTitle() . "</h2>";
    echo "<h3>Director: " . $movie->getDirector() . "</h3>";
    echo "<h3>Release Year: " . $movie->getReleaseYear() . "</h3>";
    echo "<h3>Rating: " . $movie->getRating() . "</h3>";
    echo "<h3>Genre: " . $movie->getGenres() . "</h3>";
    echo "<br>";
}
?>