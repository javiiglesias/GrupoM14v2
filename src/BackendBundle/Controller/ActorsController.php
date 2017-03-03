<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActoresController extends Controller
{
    public function actoresAction()
    {
        return $this->render('BackendBundle:Default:actores.html.twig');
    }
}
