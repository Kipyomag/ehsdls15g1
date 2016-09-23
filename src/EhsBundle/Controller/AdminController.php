<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\Users;
use EhsBundle\Form\UsersType;

/**
 * Users controller.
 *
 */
class AdminController extends Controller
{
    /**
     * Panneau d'administrateur.
     *
     */
    public function indexAction()
    {
        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            return $this->render('admin/index.html.twig');
        }else{

            $this->get('session')->getFlashBag()->set('danger', 'Vous devez être administrateur pour accéder à cette page.');

            return $this->redirectToRoute('articles_index');
        }
    }

    /**
     * Chercher un utilisateur.
     *
     */
    public function searchUsersAction(Request $request)
    {
        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            $em = $this->getDoctrine()->getManager();

            $search = $request->request->get('search');          
            /* A terminer */
            $users = $em->getRepository('EhsBundle:Users')->findBy(array('nom' => $search));

            return $this->render('admin/.html.twig', array(
                'users' => $users,
            ));

        }else{

            $this->get('session')->getFlashBag()->set('danger', 'Vous devez être administrateur pour accéder à cette page.');

            return $this->redirectToRoute('articles_index');
        }
    }

    /**
     * Creates a new Users entity.
     *
     */
    public function newAction(Request $request)
    {
        //if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $user = new Users();
            $form = $this->createForm('EhsBundle\Form\UsersType', $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($encoded);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $this->get('session')->getFlashBag()->set('success', 'Inscription réussie.');
                return $this->redirectToRoute('users_show', array('id' => $user->getId()));
            }

            return $this->render('admin/new.html.twig', array(
                'user' => $user,
                'form' => $form->createView(),
            ));
        /*} else {
            $this->get('session')->getFlashBag()->set('danger', 'Vous devez être administrateur pour accéder à cette page.');

            return $this->redirectToRoute('articles_index');
        }*/
    }

        /**
     * Displays a form to edit an existing Users entity.
     *
     */
    public function editAction(Request $request, Users $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('EhsBundle\Form\AdminUsersEditType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->get('session')->getFlashBag()->set('success', 'Vos changements on bien été mis à jour.');

            return $this->redirectToRoute('admin_users_edit', array('id' => $user->getId()));
        }

        return $this->render('admin/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Lists des membres.
     *
     */
    public function listeMembresAction()
    {
        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            $em = $this->getDoctrine()->getManager();

            $users = $em->getRepository('EhsBundle:Users')->findAll();

            return $this->render('admin/listeMembres.html.twig', array(
                'users' => $users,
            ));
        }else{

            $this->get('session')->getFlashBag()->set('danger', 'Vous devez être administrateur pour accéder à cette page.');

            return $this->redirectToRoute('articles_index');
        }
    }

        public function listeArticlesAction()
    {
        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            $em = $this->getDoctrine()->getManager();

            $articles = $em->getRepository('EhsBundle:Articles')->findAll();

            return $this->render('admin/listeArticles.html.twig', array(
                'articles' => $articles,
            ));
        }else{

            $this->get('session')->getFlashBag()->set('danger', 'Vous devez être administrateur pour accéder à cette page.');

            return $this->redirectToRoute('articles_index');
        }
    }

    /**
     * Creates a form to delete a Users entity.
     *
     * @param Users $user The Users entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Users $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('users_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    public function resetAction(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');

			// get the login error if there is one
			$error = $authenticationUtils->getLastAuthenticationError();

			// last username entered by the user
			$lastUsername = $authenticationUtils->getLastUsername();
        return $this->render(
				'users/passwordLost.html.twig',
				array(
					// last username entered by the user
					'last_username' => $lastUsername,
					'error'         => $error,
				)
			);
    }

    public function resetNowAction(Request $request)
    {
        function str_random($lenght){
            $alphabet = "0123456789abcdefghijklmnopqrstuvwxyz";
            return substr(str_shuffle(str_repeat($alphabet, $lenght)), 0, $lenght);
        }
        $params = $request->request->all();

        $username = &$params["_username"];
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $user = $em->getRepository("EhsBundle:Users")->findOneBy(array("email" => $username));

        if ($user == null) {
            return $this->redirectToRoute('users_login');
        }

        $password = str_random(10);
        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $password);
        $user->setPassword($encoded);
        $em->persist($user);
        $em->flush();
        // On envoie le mot de passe par mail
        /*mail($user->getEmail(), "Votre nouveau mot de passe", "Bonjour,\n\nVoici votre nouveau mot de passe: $password");
        */
        $mail = $user->getEmail();
        $message = \Swift_Message::newInstance()
        ->setSubject('Votre nouveau mot de passe')
        ->setFrom('send@example.com')
        ->setTo($mail)
        ->setBody(
            /*$this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/registration.html.twig',
                array('name' => $name)
            ),*/
            'Voici votre nouveau mot de passe: ' . $password
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
    $this->get('mailer')->send($message);


        $this->get('session')->getFlashBag()->set('success', 'Votre nouveau mot de passe vous a été envoyé sur l\'adresse e-mail que vous avez renseigné lors de votre inscription.');
        return $this->redirectToRoute('users_login');
    }

    /**
     * Displays a form to edit an existing Comment entity.
     *
     */
    public function editCommentAction(Request $request, Comment $comment)
    {
        $editForm = $this->createForm('EhsBundle\Form\CommentType', $comment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('admin_comment_edit', array('id' => $comment->getId()));
        }

        return $this->render('admin/editComment.html.twig', array(
            'comment' => $comment,
            'edit_form' => $editForm->createView(),
        ));
    }
}
