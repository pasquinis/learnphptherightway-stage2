<?php

namespace App\Render;

class Text extends Field
{
    public function render(): string
    {
        return <<<HTML
<input type="text" id="{$this->name}" name="{$this->name}"/>
HTML;
    }
}