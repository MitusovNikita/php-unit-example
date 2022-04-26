<?php
class User
{
    public $age;
    public $favorite_movies = [];
    public $name;

    /**
     * @param int $age
     * @param string $name
     */
    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function tellName()
    {
        return "My name is " . $this->name . ".";
    }

    public function tellAge()
    {
        return "I am " . $this->age . " years old.";
    }

    public function addFavoriteMovie($movie)
    {
        $this->favorite_movies[] = $movie;

        return true;
    }

    public function removeFavoriteMovie($movie)
    {
        if (!in_array($movie, $this->favorite_movies)) throw new InvalidArgumentException("Unknown movie: " . $movie);

        unset($this->favorite_movies[array_search($movie, $this->favorite_movies)]);

        return true;
    }
}