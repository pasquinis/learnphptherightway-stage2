<?php

declare(strict_types=1);

namespace App\Routing\Controller;

use App\Routing\App;
use App\Routing\View;
use DateTime;
use DateTimeZone;
use Exception;
use PDO;
use PDOException;
use Throwable;
use App\Routing\Model\User;
use App\Routing\Model\Invoice;
use App\Routing\Model\SignUp;

class HomeController
{
    public function index(): View
    {

        $email = mt_rand(1, 100) . 'j.doe@email.com';
        $fullName = 'Jim Three' . mt_rand(1, 100);
        $isActive = true;
        $amount = mt_rand(1, 300);

        $userModel = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))
            ->register(
                ['email' => $email, 'fullName' => $fullName, 'active' => $isActive],
                ['amount' => $amount]
            );            

        return View::make('index', [
            'title' => 'Home page',
            'invoice' => $invoiceModel->find($invoiceId),
        ]);
    }
}