<?php

namespace App\Repository;

use App\Models\Movie;
use App\Service\PDOService;
use PDO;

#[\AllowDynamicProperties]
class MovieRepository
{
    private PDOService $PDOService;
    private string $queryAll = 'SELECT * FROM movie';

    public function __construct()
    {
        $this->PDOService = new PDOService();
    }


    public function findAll(): array
    {
        return $this->PDOService->getPDO()->query($this->queryAll)->fetchAll();
    }

    public function findFirstMovieToModel(): Movie
    {
        return $this->PDOService->getPDO()->query($this->queryAll)->fetchObject(Movie::class);
    }

    public function findAllMoviesToModel(): array
    {
        return $this->PDOService->getPDO()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }

    public function findOneById(int $id = null): Movie|bool
    {
        $query = $this->PDOService->getPDO()->prepare('SELECT * FROM movie WHERE id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetchObject(Movie::class);
    }

    public function findByTitle(string $title = null): array|bool
    {
        $query = $this->PDOService->getPDO()->prepare('SELECT * FROM movie WHERE title LIKE :title');
        $like = '%' . $title . '%';
        $query->bindParam(':title', $like);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }

    public function insertMovie(Movie $movie): Movie
    {
        $query = $this->PDOService->getPDO()->prepare('INSERT INTO movie VALUE (null,:title,:release_date)');
        $title = $movie->getTitle();
        $date = $movie->getReleaseDate();
        $release_date = $date->format('Y-m-d');
        $query->bindParam(':title', $title);
        $query->bindParam(':release_date', $release_date);
        $query->execute();
        return $movie;
    }

    public function addActorsToMovie(Movie $movie): Movie
    {
        $actors = $movie->getActors();
        foreach ($actors as $actor) {
            $query = $this->PDOService->getPDO()->prepare('INSERT INTO play VALUES (null,:idMovie,:idActor)');

            $idMovie = $movie->getId();
            $idActor = $actor->getId();

            $query->bindParam(':idMovie', $idMovie);
            $query->bindParam(':idActor', $idActor);

            $query->execute();
        }
        return $movie;
    }

    public function deleteMovie(Movie $movie): void
    {
        $query = $this->PDOService->getPDO()->prepare('DELETE FROM movie WHERE id = :idMovie');
        $idMovie = $movie->getId();
        $query->bindParam(':idMovie', $idMovie);
        $query->execute();
    }

    public function updateMovie(Movie $movie): Movie
    {
        $query = $this->PDOService->getPDO()->prepare("UPDATE movie SET `title`=':title',`release_date`=':release_date' WHERE id = :idMovie");
        $idMovie = $movie->getId();
        $title = $movie->getTitle();
        $releaseDate = $movie->getReleaseDate();
        $query->bindParam(':idMovie', $idMovie);
        $query->bindParam(':title', $title);
        $query->bindParam(':release_date', $releaseDate);
        $query->execute();

        return $movie;
    }
}
