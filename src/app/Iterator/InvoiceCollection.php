<?php

namespace App\Iterator;

class InvoiceCollection implements \Iterator
{
    public function __construct(public array $invoiceList) {}

	public function current()
    {
        echo __METHOD__ . PHP_EOL;
        return current(($this->invoiceList));
	}
	
	public function key()
    { 
        echo __METHOD__ . PHP_EOL;
        return key($this->invoiceList);
	}
	
	public function next()
    {
        echo __METHOD__ . PHP_EOL;
        next($this->invoiceList);
	}
	
	public function rewind()
    {
        echo __METHOD__ . PHP_EOL;
        reset($this->invoiceList);
	}
	
	public function valid()
    {
        echo __METHOD__ . PHP_EOL;
        return current($this->invoiceList) != false;
	}
}