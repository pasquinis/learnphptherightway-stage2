<?php

$arr = [ 1, 4 => 2, 3];

$obj = (object) $arr;

$key = 4;
var_dump($obj->$key, $obj->{0});