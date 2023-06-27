<?php

namespace App\Models;

use Datetime;

#[\AllowDynamicProperties]
class Movie
{
    private string $title;
    private Datetime $releaseDate;

    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
