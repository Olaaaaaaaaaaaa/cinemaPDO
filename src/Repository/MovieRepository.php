<?php

namespace App\Repository;

use App\Models\Movie;
use App\Service\PDOService;
use PDO;


class MovieRepository
{
    protected PDOService $pdoService;
    private string $selectAll = "SELECT * FROM movie";
    private array $movies = [];


    public function __construct()
    {
        $this->pdoService = new PDOService();
    }


    public function findAllMovie()
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchAll();
    }
    public function findFirst(): Movie
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchObject(Movie::class);
    }

    public function findAllModelMovie(): array
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }

    public function findByIdMovie(?int $id = null): Movie|bool
    {
        $query = $this->pdoService->getPDO()->prepare("SELECT * FROM movie WHERE id = ?");
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetchObject(Movie::class);
    }

    public function addMovie(Movie $movie): void
    {
        $this->movies[] = $movie;
    }

    public function removeMovie(Movie $movie): void
    {
        if (array_search($movie, $this->movies) === true) {
            unset($this->movies, $movie);
        }
    }
}
