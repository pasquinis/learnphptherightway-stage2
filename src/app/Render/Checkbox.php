<?php

namespace App\Render;

class Checkbox extends Boolean
{
    public function render(): string
    {
        return <<<HTML
<input type="checkbox" id="{$this->name}" name="{$this->name}"/>
HTML;
    }
}