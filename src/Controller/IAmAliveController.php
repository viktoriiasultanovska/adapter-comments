<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IAmAliveController
 * @package App\Controller
 */
class IAmAliveController extends AbstractController
{

    public function handle(): Response
    {
        return new Response('');
    }
}
