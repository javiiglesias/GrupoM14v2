<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DirectorsController extends Controller
{
    public function directorsAction()
    {
        $director = $this->getDoctrine()->getRepository('FrontendBundle:Director')->findAll();
        $tipusobra = $this->getDoctrine()->getRepository('FrontendBundle:TipoObra')->findAll();
        $obres = $this->getDoctrine()->getRepository('FrontendBundle:obra')->findAll();

        return $this->render('FrontendBundle:Default:mostrardirectors.html.twig', array(
                    'array' => $director,
                    'obres' => $obres,
                    'tipusObra' => $tipusobra
        ));
    }  
    
}
