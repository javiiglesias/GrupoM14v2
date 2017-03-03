<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Actor;
use FrontendBundle\Entity\TipoActor;
use FrontendBundle\Entity\obra;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;

class ActorsController extends Controller {

    public function actorsAction() {
        $actors = $this->getDoctrine()->getRepository('FrontendBundle:Actor')->findAll();

        return $this->render('BackendBundle:Default:actors.html.twig', array(
                    'array' => $actors
        ));
    }

    public function addActorAction(Request $request) {
        $actor = new Actor();
        $form = $this->createFormBuilder($actor)
                ->add('NIF', TextType::class, array('label' => 'NIF '))
                ->add('Nom', TextType::class, array('label' => 'Nombre '))
                ->add('Cognom1', TextType::class, array('label' => 'Cognom1 '))
                ->add('Cognom2', TextType::class, array(
                    'label' => 'Cognom2'))
                ->add('sexe', ChoiceType::class, array('choices' => array(
                        'Dona' => 'female', 'Home' => 'male'), 'label' => 'Sexe'))
                ->add('Foto', TextType::class, array(
                    'label' => 'Foto',))
                ->add('obra', EntityType::class, array(
                    'label' => 'Obra en la que participa:',
                    'class' => 'FrontendBundle:Actor',
                    'choice_label' => 'nom',
                    'multiple' => FALSE
                ))
                ->add('tipoActor', EntityType::class, array(
                    'label' => 'Paper:',
                    'class' => 'FrontendBundle:TipoActor',
                    'choice_label' => 'papel',
                    'multiple' => FALSE
                ))
                ->add('save', SubmitType::class, array('label' => 'Crear Actor',
                    'attr' => array(
                        'class' => 'btn btn-warning mt')
                    ))
                ->getForm();

        $form->handleRequest($request); //agafa les dades del formulari

        if ($form->isSubmitted() && $form->isValid()) {

            $actor = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($actor);
            $em->flush(); //inserta un nou registre

            return $this->forward('BackendBundle:Actors:actors');
        }

        return $this->render('BackendBundle:Default:form.html.twig', array(
                    'titol' => 'Afegir Actor',
                    'form' => $form->createView(),
        ));
    }
    
    public function addTipusActorAction(Request $request) {
        $tipoActor = new TipoActor();
        $form = $this->createFormBuilder($tipoActor)
                ->add('papel', TextType::class, array('label' => 'Nom de paper: '))
                ->add('save', SubmitType::class, array('label' => 'Crear Tipus d\'Actor',
                    'attr' => array(
                        'class' => 'btn btn-warning mt')))
                ->getForm();

        $form->handleRequest($request); //agafa les dades del formulari

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoActor);
            $em->flush(); //inserta un nou registre

            return $this->redirect($this->generateurl('backend_actors'));
        }

        return $this->render('BackendBundle:Default:form.html.twig', array(
                    'titol' => 'Afegir Tipus d\'Actor',
                    'form' => $form->createView(),
        ));
    }

    public function editActorAction($id, Request $request) {
        $actor = $this->getDoctrine()->getRepository('FrontendBundle:Actor')->findOneById($id);


        $form = $this->createFormBuilder($actor)
                ->add('NIF', TextType::class, array('label' => 'NIF '))
                ->add('Nom', TextType::class, array('label' => 'Nombre '))
                ->add('Cognom1', TextType::class, array('label' => 'Cognom1 '))
                ->add('Cognom2', TextType::class, array(
                    'label' => 'Cognom2'))
                ->add('sexe', ChoiceType::class, array('choices' => array(
                        'Dona' => 'female', 'Home' => 'male'), 'label' => 'Sexe'))
                ->add('Foto', TextType::class, array(
                    'label' => 'Foto',))
                ->add('obra', EntityType::class, array(
                    'label' => 'Obra en la que participa:',
                    'class' => 'FrontendBundle:obra',
                    'choice_label' => 'nom',
                    'multiple' => FALSE
                ))
                ->add('tipoActor', EntityType::class, array(
                    'label' => 'Paper:',
                    'class' => 'FrontendBundle:TipoActor',
                    'choice_label' => 'papel',
                    'multiple' => FALSE
                ))
                ->add('save', SubmitType::class, array('label' => 'Editar Actor',
                    'attr' => array(
                        'class' => 'btn btn-warning mt')
                    ))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $actor = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($actor);
            $em->flush();

            return $this->forward('BackendBundle:Actors:actors');
        }

        return $this->render('BackendBundle:Default:form.html.twig', array(
                    'titol' => 'Editar Actor',
                    'form' => $form->createView(),
        ));
    }

    public function deleteActorAction($id) {
        $actor = $this->getDoctrine()->getRepository('FrontendBundle:Actor')->findOneById($id);
        if ($actor != null) {
             $em = $this->getDoctrine()->getManager();
            $em->remove($actor);
            $em->flush();
            return $this->redirect($this->generateurl('backend_actors'));
        }       
        
    }

}
