<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactoController extends Controller
{
    public function contactoAction(Request $query)
    { 
    	
        return $this->render('FrontendBundle:Default:contacto.html.twig');
    }
    //http://victorroblesweb.es/2016/01/16/crear-formularios-en-symfony3/
}
