<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InicioController extends Controller
{
    public function inicioAction()
    {
        return $this->render('FrontendBundle:Default:inicio.html.twig');
    }
}
