<?php

namespace App\Models;

use Datetime;

#[\AllowDynamicProperties]
class Movie
{
    private string $title;
    private Datetime $releaseDate;

    public function __getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     */
    public function __setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function __getReleaseDate(): Datetime
    {
        return $this->releaseDate;
    }
    /**
     * @param Datetime $releaseDate
     */
    public function __setReleaseDate(Datetime $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }
}
