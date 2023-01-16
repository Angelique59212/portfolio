<?php

namespace App\Controller;

use JetBrains\PhpStorm\NoReturn;

class HomeController extends AbstractController
{
    #[NoReturn] public function index()
    {
        $this->render('home/home');
    }


}