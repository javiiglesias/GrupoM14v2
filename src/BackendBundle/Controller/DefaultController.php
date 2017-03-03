<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FrontendBundle\Entity\Director;
use FrontendBundle\Entity\Actor;
use FrontendBundle\Entity\Obra;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $response = new Response();
        $statusServer = $response->getStatusCode();   
        
        $directors = $this->getDoctrine()->getRepository('FrontendBundle:Director')->findAll();
        $actors = $this->getDoctrine()->getRepository('FrontendBundle:Actor')->findAll();
        $obres = $this->getDoctrine()->getRepository('FrontendBundle:Obra')->findAll();
        
        $contDirectors = 0;
        $contActors = 0;
        $contobres = 0;
        foreach($directors as $director) {
            $contDirectors++;
        }
        foreach($actors as $actor) {
            $contActors++;
        }
        foreach($obres as $obra) {
            $contobres++;
        }
        return $this->render('BackendBundle:Default:index.html.twig', array(
            'statusserver' => $statusServer,
            'numDirectors' => $contDirectors,
            'numActors' => $contActors,
            'numobres' => $contobres
        ));
    }
}
