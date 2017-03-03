<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Obra;
use FrontendBundle\Entity\TipoObra;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
                        
        $tipusobra = $this->getDoctrine()->getRepository('FrontendBundle:TipoObra')->findAll();                
        
        return $this->render('FrontendBundle:Default:index.html.twig', array(
                    'tipusObra' => $tipusobra,
        ));
    }

    public function quisomAction()
    {
        $tipusobra = $this->getDoctrine()->getRepository('FrontendBundle:TipoObra')->findAll();
        return $this->render('FrontendBundle:Default:quisom.html.twig', array(
                    'tipusObra' => $tipusobra,
        ));
    }
    
    public function contactoAction(Request $request) {
        //Formulari creat sense objectes
        $defaultData = array('message' => 'formulari de contacte');
        $form = $this->createFormBuilder($defaultData)
                ->add('Nom', TextType::class, array(
                    'label' => 'Nom:',
                    'constraints' => new Length(array('min' => 6)),))//validació
                ->add('Email', EmailType::class, array(
                    'label' => 'Email:',
                    'label_attr' => ['class' => 'mt'],
                ))
                ->add('Missatge', TextareaType::class, array(
                    'label' => 'Missatge:',
                    'label_attr' => ['class' => 'mt'],
                    'attr' => array('style' => 'height: 100px')))
                ->add('Enviar', SubmitType::class, array('attr' => array(
                        'class' => 'btn btn-lg btn-warning mt btn-contact')))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // les dades estàn dins d'un array amb les keys "nom", "email", i "missatges"
            $data = $form->getData();
        }

        // carrega la vista del formulari
        $tipusobra = $this->getDoctrine()->getRepository('FrontendBundle:TipoObra')->findAll();
        return $this->render('FrontendBundle:Default:contacto.html.twig', array(
                    'form' => $form->createView(),
                    'tipusObra' => $tipusobra,
        ));
    }
       
}
