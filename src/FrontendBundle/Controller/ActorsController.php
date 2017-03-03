<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Actor;


class ActorsController extends Controller
{
    public function actorsAction()
    {
        $actors= $this->getDoctrine()->getRepository('FrontendBundle:Actor')->findAll();
        $tipusobra = $this->getDoctrine()->getRepository('FrontendBundle:TipoObra')->findAll();
        $obres = $this->getDoctrine()->getRepository('FrontendBundle:obra')->findAll();
        return $this->render('FrontendBundle:Default:mostraractors.html.twig', array(
                    'array' => $actors,
                    'obres' => $obres,
                    'tipusObra' => $tipusobra,
        ));
    }
    
     public function filtreSexeAction($sexe)
    {
        $actors = $this->getDoctrine()->getRepository('FrontendBundle:Actor')->findBySexe($sexe);
 
        $tipusobra = $this->getDoctrine()->getRepository('FrontendBundle:TipoObra')->findAll();
        return $this->render('FrontendBundle:Default:mostraractors.html.twig', array(
                    'array' => $actors,
                    'tipusObra' => $tipusobra,
        ));
    }
        
    
}
