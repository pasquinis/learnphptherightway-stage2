<?php

use App\Render\Boolean;
use App\Render\Checkbox;
use App\Render\Field;
use App\Render\Radio;
use App\Render\Text;

require __DIR__ . '/../vendor/autoload.php';

$fields = [
    new Text('text'),
    new Checkbox('checkBox'),
    new Radio('radio'),
];

foreach($fields as $field) {
    echo $field->render() . '</br>';
}