<?php

declare(strict_types=1);

namespace App\Routing\Classes;

class Home
{
    public function index(): string
    {
        echo '<pre>';
        var_dump(($_REQUEST));
        echo '</pre>';

        echo '<pre>';
        var_dump(($_GET));
        echo '</pre>';

        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        echo '<form action="/?foo=bar&amount=100" method="post">
            <label>amount</label>
            <input type="text" name="amount"></input>
            </form>';

        return 'Home';
    }
}