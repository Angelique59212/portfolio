<?php

namespace App\Controller;

use JetBrains\PhpStorm\NoReturn;

class UserController extends AbstractController
{
    public function index()
    {
        // TODO: Implement index() method.
    }

    #[NoReturn] public function about() {
        $this->render('user/about');
    }
}
