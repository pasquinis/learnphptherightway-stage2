<?php

namespace App;

class Toaster
{
    protected array $slices;
    protected int $size;

    public function __construct()
    {
       $this->slices = [];
       $this->size = 2; 
    }

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast(): void
    {
        foreach($this->slices as $item => $slice) {
            echo ($item + 1) . ": toasting slice `{$slice}`" . PHP_EOL;
        }
    }
}