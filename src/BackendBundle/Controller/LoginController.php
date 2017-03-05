<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Frontend\Entity\usuario;
use Symfony\Component\Security\Core\SecurityContext;
use \Symfony\Component\Security\Core\Exception\AccessDeniedException;

class LoginController extends Controller {

    public function loginAction(Request $request) {

        $authenticationUtils = $this->get('security.authentication_utils');

        // Obtener el error de inicio de sesión
        $error = $authenticationUtils->getLastAuthenticationError();

        // obtener el último nombre de usuario introducido por el usuario
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('BackendBundle:Default:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error));
    }

}
