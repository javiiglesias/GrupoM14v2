<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Obra;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;

class ObrasController extends Controller {

    public function obrasAction() {
        return $this->render('BackendBundle:Default:obras.html.twig');
    }

    public function addObraAction(Request $request) {
        $obra = new Obra();
        $form = $this->createFormBuilder($obra)
                ->add('Nom', TextType::class, array('label' => 'Nombre '))
                ->add('Descripcio', TextType::class, array('label' => 'Descripción '))
                ->add('DataInici', DateType::class, array(
                    'widget' => 'choice',))
                ->add('DataFi', DateType::class, array(
                    'widget' => 'choice',))
                ->add('save', SubmitType::class, array('label' => 'Crear Obra'))
                ->getForm();

        $form->handleRequest($request); //agafa les dades del formulari

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $obra = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Category is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($obra);
            $em->flush(); //inserta un nou registre

            return $this->render('BackendBundle:Default:obras.html.twig');
        }

        return $this->render('BackendBundle:Default:addObra.html.twig', array(
                    'titol' => 'Añadir obra',
                    'form' => $form->createView(),
        ));
    }

}
