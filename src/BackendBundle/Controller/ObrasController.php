<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ObrasController extends Controller
{
    public function obrasAction()
    {
        return $this->render('BackendBundle:Default:obras.html.twig');
    }
}
