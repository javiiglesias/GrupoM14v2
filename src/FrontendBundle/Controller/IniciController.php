<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IniciController extends Controller
{
    public function iniciAction()
    {
        return $this->render('FrontendBundle:Default:inici.html.twig');
    }
}
