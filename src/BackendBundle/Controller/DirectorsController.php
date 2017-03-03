<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Director;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;

class DirectorsController extends Controller {

    public function directorsAction() {

        $directors = $this->getDoctrine()->getRepository('FrontendBundle:Director')->findAll();

        return $this->render('BackendBundle:Default:directors.html.twig', array(
                    'array' => $directors
        ));
    }

    public function addDirectorAction(Request $request) {

        $director = new Director();
        $form = $this->createFormBuilder($director)
                ->add('NIF', TextType::class, array('label' => 'NIF '))
                ->add('Nom', TextType::class, array('label' => 'Nombre '))
                ->add('Cognom1', TextType::class, array('label' => 'Cognom1 '))
                ->add('Cognom2', TextType::class, array(
                    'label' => 'Cognom2'))
                ->add('save', SubmitType::class, array('label' => 'Crear Director',
                    'attr' => array(
                        'class' => 'btn btn-warning mt')
                ))
                ->getForm();

        $form->handleRequest($request); //agafa les dades del formulari

        if ($form->isSubmitted() && $form->isValid()) {

            $director = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($director);
            $em->flush(); //inserta un nou registre

            return $this->redirect($this->generateurl('backend_directors'));
        }

        return $this->render('BackendBundle:Default:form.html.twig', array(
                    'titol' => 'Afegir Director',
                    'form' => $form->createView(),
        ));
    }

    public function editDirectorAction($id, Request $request) {

        $director = $this->getDoctrine()->getRepository('FrontendBundle:Director')->findOneById($id);

        $form = $this->createFormBuilder($director)
                ->add('NIF', TextType::class, array('label' => 'NIF '))
                ->add('Nom', TextType::class, array('label' => 'Nombre '))
                ->add('Cognom1', TextType::class, array('label' => 'Cognom1 '))
                ->add('Cognom2', TextType::class, array('label' => 'Cognom2'))
                ->add('save', SubmitType::class, array('label' => 'Editar Director',
                    'attr' => array(
                        'class' => 'btn btn-warning mt')
                ))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $director = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($director);
            $em->flush();

            return $this->redirect($this->generateurl('backend_directors'));
        }

        return $this->render('BackendBundle:Default:form.html.twig', array(
                    'titol' => 'Editar Director',
                    'form' => $form->createView(),
        ));
    }

    public function deleteDirectorAction($id) {

        $director = $this->getDoctrine()->getRepository('FrontendBundle:Director')->findOneById($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($director);
        $em->flush();
        return $this->redirect($this->generateurl('backend_directors'));
    }

}
