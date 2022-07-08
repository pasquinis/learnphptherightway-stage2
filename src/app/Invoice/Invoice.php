<?php

declare(strict_types=1);

namespace App\Invoice;

class Invoice
{
    protected function process(float $amount, string $description)
    {
        var_dump($amount, $description);
    }

    public function  __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            call_user_func_array([$this, $name], $arguments);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        var_dump('static', $name, $arguments);
    }
}