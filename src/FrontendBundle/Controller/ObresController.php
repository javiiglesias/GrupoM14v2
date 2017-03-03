<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ObresController extends Controller
{
    public function obresAction()
    {
        $obra = $this->getDoctrine()->getRepository('FrontendBundle:Obra')->findAll();
        $tipusobra = $this->getDoctrine()->getRepository('FrontendBundle:TipoObra')->findAll();
        return $this->render('FrontendBundle:Default:mostrarobres.html.twig', array(
                    'array' => $obra,
                    'tipusObra' => $tipusobra
        ));
    }
    
     public function mostrarTipusObraAction($id)
    {
        $obra = $this->getDoctrine()->getRepository('FrontendBundle:Obra')->findByTipoObra($id);
 
        $tipusobra = $this->getDoctrine()->getRepository('FrontendBundle:TipoObra')->findAll();
        return $this->render('FrontendBundle:Default:mostrarobres.html.twig', array(
                    'array' => $obra,
                    'tipusObra' => $tipusobra,
        ));
    }
    
}
