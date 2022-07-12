<?php

namespace App\Exception;

class MissingBillingInfoException extends \Exception
{
    protected $message = 'Missing Billing Info';
}