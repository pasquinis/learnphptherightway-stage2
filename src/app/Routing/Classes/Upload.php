<?php

namespace App\Routing\Classes;

class Upload
{
    public function index(): string
    {
        return <<<FORM
        <form action='/upload/store' method='post' enctype='multipart/form-data'>
            <input type='file' name='receipt[]' />
            <input type='file' name='receipt[]' />
            <button type='submit'>Upload</button>
        </form>
FORM;
    }

    public function store()
    {
        for ($i = 0; $i < count($_FILES['receipt']['name']); $i++) {
            $destinationFilenName = STORAGE_PATH . '/' . $_FILES['receipt']['name'][$i];
            move_uploaded_file($_FILES['receipt']['tmp_name'][$i], $destinationFilenName);
            echo '<pre>';
            var_dump(pathinfo($destinationFilenName));
            echo '</pre>';
        }
    }
}