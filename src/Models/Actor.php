<?php

namespace App\Models;

use Datetime;

#[\AllowDynamicProperties]
class Actor
{
    private string $firstName;
    private string $lastName;

    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
}
