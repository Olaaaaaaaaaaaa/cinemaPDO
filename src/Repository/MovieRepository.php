<?php

namespace App\Repository;

use App\Models\Movie;
use App\Service\PDOService;
use PDO;


class MovieRepository
{
    protected PDOService $pdoService;
    private string $selectAll = "SELECT * FROM movie";


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

    public function findAllMovieModel(): array
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }
}
