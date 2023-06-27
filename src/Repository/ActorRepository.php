<?php

namespace App\Repository;

use App\Models\Actor;
use App\Service\PDOService;
use PDO;


class ActorRepository
{
    protected PDOService $pdoService;
    private string $selectAll = "SELECT * FROM actor";
    private array $actors = [];


    public function __construct()
    {
        $this->pdoService = new PDOService();
    }


    public function findAllActor()
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchAll();
    }
    public function findFirst(): Actor
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchObject(Actor::class);
    }

    public function findAllModelActor(): array
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchAll(PDO::FETCH_CLASS, Actor::class);
    }

    public function findByIdActor(?int $id = null): Actor|bool
    {
        $query = $this->pdoService->getPDO()->prepare("SELECT * FROM actor WHERE id = ?");
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetchObject(Actor::class);
    }

    public function addActor(Actor $actor): void
    {
        $this->actors[] = $actor;
    }

    public function removeActor(Actor $actor): void
    {
        if (array_search($actor, $this->actors) === true) {
            unset($this->actors, $actor);
        }
    }
}
