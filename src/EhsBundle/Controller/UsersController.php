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
class UsersController extends Controller
{
    /**
     * Lists all Users entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('EhsBundle:Users')->findAll();

        return $this->render('users/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new Users entity.
     *
     */
    public function newAction(Request $request)
    {
        phpinfo();die();
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

            return $this->redirectToRoute('users_show', array('id' => $user->getId()));
        }

        return $this->render('users/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Users entity.
     *
     */
    public function showAction(Users $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('users/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Users entity.
     *
     */
    public function editAction(Request $request, Users $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('EhsBundle\Form\UsersType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('users_edit', array('id' => $user->getId()));
        }

        return $this->render('users/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Users entity.
     *
     */
    public function deleteAction(Request $request, Users $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('users_index');
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
}
