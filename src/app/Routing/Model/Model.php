<?php

declare(strict_types=1);

namespace App\Routing\Model;

use App\Routing\DB;
use App\Routing\App;

abstract class Model
{
    protected DB $db;

    public function __construct()
    {
        $this->db = App::db();
    }

}