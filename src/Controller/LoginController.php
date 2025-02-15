<?php

declare(strict_types=1);

namespace Nhc\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('login/index.html.twig');
    }
}
