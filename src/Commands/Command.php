<?php

namespace App\Commands;

use App\Commands\CommandInterface;

class Command implements CommandInterface
{
    public function __construct() {
        var_dump('Hello');
    }

    public function run()
    {

    }
}