<?php

namespace App\Models;

use Datetime;

class Movie
{
    private string $name;
    private Datetime $releaseDate;

    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getReleaseDate(): Datetime
    {
        return $this->releaseDate;
    }
    /**
     * @param Datetime $releaseDate
     */
    public function setReleaseDate(Datetime $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }
}
