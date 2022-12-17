<?php

namespace Classes\Users;

class User
{
    private int $id;

    public function __construct()
    {
        $this->id = rand();
    }
}