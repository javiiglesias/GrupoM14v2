<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProyectosController extends Controller
{
    public function proyectosAction()
    {
        return $this->render('BackendBundle:Default:proyectos.html.twig');
    }
}
