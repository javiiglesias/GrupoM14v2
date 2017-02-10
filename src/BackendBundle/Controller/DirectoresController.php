<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DirectoresController extends Controller
{
    public function directoresAction()
    {
        return $this->render('BackendBundle:Default:directores.html.twig');
    }
}
