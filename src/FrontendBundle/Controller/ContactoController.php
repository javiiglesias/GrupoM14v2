<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactoController extends Controller
{
    public function contactoAction()
    {
        return $this->render('FrontendBundle:Default:contacto.html.twig');
    }
}
