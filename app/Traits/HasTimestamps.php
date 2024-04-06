<?php

namespace App\Traits;

trait HasTimestamps
{
    public function createdAt(): String
    {
        return $this->createdAt()->format('d-m-Y');
    }

    public function updateAt(): String
    {
        return $this->updateAt()->format('d-m-Y');
    }
}