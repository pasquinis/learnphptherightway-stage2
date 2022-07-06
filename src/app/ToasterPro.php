<?php

namespace App;

class ToasterPro extends Toaster
{
    protected int $size;

    public function __construct()
    {
        parent::__construct();
        $this->size = 4;
    }

    public function toastBagel(): void
    {
        foreach($this->slices as $item => $slice) {
            echo ($item + 1) . ": toasting slice `{$slice}` with bagel option" . PHP_EOL;
        }
    }
}