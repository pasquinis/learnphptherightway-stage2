<?php

namespace App\Routing\Exception;

use Exception;

class ViewFileNotFoundException extends Exception 
{
    protected $message = 'View File Not Found';
}