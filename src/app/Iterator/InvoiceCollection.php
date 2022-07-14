<?php

namespace App\Iterator;

class InvoiceCollection implements \Iterator
{
    private int $key;

    public function __construct(public array $invoiceList) {}

	public function current()
    {
        echo __METHOD__ . PHP_EOL;
        return $this->invoiceList[$this->key];
	}
	
	public function key()
    { 
        echo __METHOD__ . PHP_EOL;
        return $this->key;
	}
	
	public function next()
    {
        echo __METHOD__ . PHP_EOL;
        ++$this->key;
	}
	
	public function rewind()
    {
        echo __METHOD__ . PHP_EOL;
        $this->key = 0;
	}
	
	public function valid()
    {
        echo __METHOD__ . PHP_EOL;
        return isset($this->invoiceList[$this->key]);
	}
}