<?php

declare(strict_types=1);

namespace App\Routing\Controller;

use App\Routing\View;

class UploadController
{
    public function index(): View
    {
        return View::make('upload/index');
    }

    public function store()
    {
        for ($i = 0; $i < count($_FILES['receipt']['name']); $i++) {
            if (empty($_FILES['receipt']['tmp_name'][$i])) {
                continue;
            }
            $destinationFilenName = STORAGE_PATH . '/' . $_FILES['receipt']['name'][$i];
            move_uploaded_file($_FILES['receipt']['tmp_name'][$i], $destinationFilenName);

            header('Location: /upload');
            exit;
        }
    }
}