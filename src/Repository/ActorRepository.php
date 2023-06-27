<?php

namespace App\Repository;

use App\Models\Actor;
use App\Service\PDOService;
use PDO;


class ActorRepository
{
    protected PDOService $pdoService;
    private string $selectAll = "SELECT * FROM actor";


    public function __construct()
    {
        $this->pdoService = new PDOService();
    }


    public function findAll()
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchAll();
    }
    public function findFirst(): Actor
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchObject(Actor::class);
    }

    public function findAllModel(): array
    {
        return $this->pdoService->getPDO()->query($this->selectAll)->fetchAll(PDO::FETCH_CLASS, Actor::class);
    }

    public function findById(?int $id = null): Actor|bool
    {
        $query = $this->pdoService->getPDO()->prepare("SELECT * FROM actor WHERE id = ?");
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetchObject(Actor::class);
    }
}
