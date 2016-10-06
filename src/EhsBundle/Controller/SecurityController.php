<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{

    public function loginAction(Request $request)
    {
    	if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ANONYMOUS')) {
			
			$this->get('session')->getFlashBag()->set('danger', 'Votre compte n\'a pas été encore validé.');

            return $this->redirectToRoute('articles_index');
		} else {

			$authenticationUtils = $this->get('security.authentication_utils');

			// get the login error if there is one
			$error = $authenticationUtils->getLastAuthenticationError();

			// last username entered by the user
			$lastUsername = $authenticationUtils->getLastUsername();

			return $this->render(
				'users/login.html.twig',
				array(
					// last username entered by the user
					'last_username' => $lastUsername,
					'error'         => $error,
				)
			);
		}
    }

	public function logoutAction()
	{
		throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
	}
}