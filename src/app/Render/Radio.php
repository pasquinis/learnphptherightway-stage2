<?php

namespace App\Render;

class Radio extends Boolean
{
    public function render(): string
    {
        return <<<HTML
<input type="radio" id="{$this->name}" name="{$this->name}"/>
HTML;
    }
}