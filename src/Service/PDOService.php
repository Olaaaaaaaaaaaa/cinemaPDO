<?php

namespace App\Service;

use PDO;
use App\Models\Movie;

class PDOService
{
    protected PDO $pdo;

    private string $dsn = 'mysql:host=127.0.0.1:3306;dbname=cinema';
    private string $user = 'root';
    private string $pwd = '';

    public function __construct()
    {
        $this->pdo = new PDO($this->dsn, $this->user, $this->pwd);
    }

    // public function findAll()
    // {
    //     return $this->pdo->query("SELECT * FROM movie")->fetchAll();
    // }
    // public function findAll(): Movie
    // {
    //     return $this->pdo->query("SELECT * FROM movie")->fetchObject(Movie::class);
    // }
    public function findAll(): array
    {
        $query = $this->pdo->query("SELECT * FROM movie");
        return $query->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }
}
