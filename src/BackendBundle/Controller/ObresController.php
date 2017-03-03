<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Obra;
use FrontendBundle\Entity\TipoObra;
use FrontendBundle\Entity\Director;
use FrontendBundle\Entity\Actor;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;

class ObresController extends Controller {

    /**
     * 
     * @return typeMostra el llistat de totes les obres
     */
    public function obresAction() {

        $obra = $this->getDoctrine()->getRepository('FrontendBundle:Obra')->findAll();
        return $this->render('BackendBundle:Default:obres.html.twig', array(
                    'array' => $obra
        ));
    }

    /**
     * Crea formulari i afegeix una nova obra 
     */
    public function addObraAction(Request $request) {
        $obra = new Obra();
        $form = $this->createFormBuilder($obra)
                ->add('Nom', TextType::class, array('label' => 'Nom: '))
                ->add('Descripcio', TextareaType::class, array(
                    'label' => 'Descripció: '))
                ->add('tipoObra', EntityType::class, array(
                    'label' => 'Tipus Obra:',
                    'class' => 'FrontendBundle:TipoObra',
                    'choice_label' => 'Descripcio',
                    'multiple' => FALSE
                ))
                ->add('director', EntityType::class, array(
                    'label' => 'Director:',
                    'class' => 'FrontendBundle:Director',
                    'choice_label' => 'nom',
                    'multiple' => FALSE
                ))
                ->add('DataInici', DateType::class, array(
                    'label' => 'Data Inici:',
                    'widget' => 'single_text',
                    'html5' => false,
                    'format' => 'dd/mm/yyyy',
                    'attr' => ['class' => 'js-datepicker']))
                ->add('DataFi', DateType::class, array(
                    'label' => 'Data Final:',
                    'widget' => 'single_text',
                    'html5' => false,
                    'format' => 'dd/mm/yyyy',
                    'attr' => ['class' => 'js-datepicker']))
                ->add('save', SubmitType::class, array('label' => 'Crear Obra',
                    'attr' => array(
                        'class' => 'btn btn-warning mt')))
                ->getForm();

        $form->handleRequest($request); //agafa les dades del formulari

        if ($form->isSubmitted() && $form->isValid()) {

            $obra = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($obra);
            $em->flush(); //inserta un nou registre

            $this->get('session')->getFlashBag()->add(
                    'notice',array(
                    'type' => 'success',
                    'msg' => 'S\'ha afegit l\'obra'
            ));

            return $this->redirect($this->generateurl('backend_obres'));
        }

        return $this->render('BackendBundle:Default:form.html.twig', array(
                    'titol' => 'Afegir obra',
                    'form' => $form->createView()
        ));
    }

    /**
     * Crea formulari i afegeix un nou tipus d'obra 
     */
    public function addTipusObraAction(Request $request) {
        $tipoObra = new TipoObra();
        $form = $this->createFormBuilder($tipoObra)
                ->add('Descripcio', TextType::class, array('label' => 'Nom: '))
                ->add('save', SubmitType::class, array('label' => 'Crear Tipus d\'Obra',
                    'attr' => array(
                        'class' => 'btn btn-warning mt')))
                ->getForm();

        $form->handleRequest($request); //agafa les dades del formulari

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoObra);
            $em->flush(); //inserta un nou registre
            
            $this->get('session')->getFlashBag()->add(
                    'notice',array(
                    'type' => 'success',
                    'msg' => 'S\'ha afegit el tipus d\'obra'
            ));

            return $this->redirect($this->generateurl('backend_obres'));
        }

        return $this->render('BackendBundle:Default:form.html.twig', array(
                    'titol' => 'Afegir Tipus d\'obra',
                    'form' => $form->createView(),
        ));
    }

    /**
     * Troba l'obra a modificar amb el formulari i ho modifica
     */
    public function editObraAction($id, Request $request) {
        $obra = $this->getDoctrine()->getRepository('FrontendBundle:Obra')->findOneById($id);


        $form = $this->createFormBuilder($obra)
                ->add('Nom', TextType::class, array('label' => 'Nombre '))
                ->add('Descripcio', TextareaType::class, array(
                    'label' => 'Descripció: '))
                ->add('tipoObra', EntityType::class, array(
                    'label' => 'Tipus Obra:',
                    'class' => 'FrontendBundle:TipoObra',
                    'choice_label' => 'Descripcio',
                    'multiple' => FALSE
                ))
                ->add('director', EntityType::class, array(
                    'label' => 'Director:',
                    'class' => 'FrontendBundle:Director',
                    'choice_label' => 'nom',
                    'multiple' => FALSE
                ))
                ->add('DataInici', DateType::class, array(
                    'widget' => 'single_text',
                    'html5' => false,
                    'attr' => ['class' => 'js-datepicker']))
                ->add('DataFi', DateType::class, array(
                    'widget' => 'single_text',
                    'html5' => false,
                    'attr' => ['class' => 'js-datepicker']))
                ->add('save', SubmitType::class, array('label' => 'Editar Obra',
                    'attr' => array(
                        'class' => 'btn btn-warning mt')))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($obra);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice',array(
                    'type' => 'success',
                    'msg' => 'S\'ha modificat l\'obra'
            ));

            return $this->redirect($this->generateurl('backend_obres'));
        }

        return $this->render('BackendBundle:Default:form.html.twig', array(
                    'titol' => 'Editar obra',
                    'form' => $form->createView(),
        ));
    }

    /**
     * Elimina l'obra pel seu id
     */
    public function deleteObraAction($id) {
        $obra = $this->getDoctrine()->getRepository('FrontendBundle:Obra')->findOneById($id);

        if ($obra != null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($obra);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice',array(
                    'type' => 'success',
                    'msg' => 'S\'ha eliminat l\'obra'
            ));
        }else{
            $this->get('session')->getFlashBag()->add(
                    'notice',array(
                    'type' => 'danger',
                    'msg' => 'No s\'ha eliminat l\'obra'
            ));
        }
        return $this->redirect($this->generateurl('backend_obres'));
    }

    /**
     * Mostra els detalls d'un obra especifica
     */
    public function detallsObraAction($id) {
        $obra = $this->getDoctrine()->getRepository('FrontendBundle:Obra')->findById($id);
        return $this->render('BackendBundle:Default:destallsobra.html.twig', array(
                    'array' => $obra
        ));
    }

}
