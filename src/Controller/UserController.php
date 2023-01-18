<?php

namespace App\Controller;

use JetBrains\PhpStorm\NoReturn;

class UserController extends AbstractController
{
    private array $mailHeaders;

    public function __construct()
    {
        $this->mailHeaders = [
            'From' => 'dehainaut.angelique@orange.fr',
            'Reply-To' => 'dehainaut.angelique@orange.fr',
            'X-Mailer' => 'PHP/' . phpversion(),
            'Mime-Version' => '1.0',
            'Content-Type' => 'text/html; charset=utf-8'
        ];
    }

    public function index()
    {
        // TODO: Implement index() method.
    }

    #[NoReturn] public function about() {
        $this->render('user/about');
    }

    #[NoReturn] public function competences() {
        $this->render('user/competences');
    }


    public function project() {
        $this->render('user/project');
    }

    #[NoReturn] public function contact() {
        if (isset($_POST['mail'])) {
            $name = trim(strip_tags($_POST['name']));
            $message = trim(strip_tags($_POST['message']));
            $userMail = trim(strip_tags($_POST['mail']));

            $to = 'dehainaut.angelique@orange.fr';
            $subject = "Vous avez un message";
            if (filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
                if (strlen($message) >= 20 && strlen($message) <= 250) {
//                    if (mail($to, $subject, $message, $this->mailHeaders, $userMail)) {
//                        $_SESSION['mail'] = "mail-success";
//                    } else {
//                        $_SESSION['mail'] = "mail-error";
//                    }
                    $this->render('form/contact');
                }
            }
        } else {
            $this->render('form/contact');
        }
    }
}
