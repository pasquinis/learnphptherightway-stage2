<?php

namespace App\Routing\Exception;

use Exception;

class RouteNotFoundException extends Exception
{
    protected $message = '404 Not Found';
}