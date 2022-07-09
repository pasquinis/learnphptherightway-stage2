<?php

declare(strict_types=1);

namespace App\Binding;

class ClassA
{
    protected string $name = 'classA';

    public function getName(): string
    {
        var_dump(get_class($this));
        return $this->name;
    }

}