<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\UsersAgenda;
use EhsBundle\Form\UsersAgendaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * UsersAgenda controller.
 *
 */
class UsersAgendaController extends Controller
{
    /**
     * Lists all UsersAgenda entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usersAgendas = $em->getRepository('EhsBundle:UsersAgenda')->findAll();

        return $this->render('usersagenda/index.html.twig', array(
            'usersAgendas' => $usersAgendas,
        ));
    }

    /**
     * Creates a new UsersAgenda entity.
     *
     */
    public function newAction(Request $request)
    {
        $usersAgenda = new UsersAgenda();
        $form = $this->createForm('EhsBundle\Form\UsersAgendaType', $usersAgenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usersAgenda);
            $em->flush();

            return $this->redirectToRoute('usersagenda_show', array('id' => $usersAgenda->getId()));
        }

        return $this->render('usersagenda/new.html.twig', array(
            'usersAgenda' => $usersAgenda,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UsersAgenda entity.
     *
     */
    public function showAction(UsersAgenda $usersAgenda)
    {
        $deleteForm = $this->createDeleteForm($usersAgenda);

        return $this->render('usersagenda/show.html.twig', array(
            'usersAgenda' => $usersAgenda,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UsersAgenda entity.
     *
     */
    public function editAction(Request $request, UsersAgenda $usersAgenda)
    {
        $deleteForm = $this->createDeleteForm($usersAgenda);
        $editForm = $this->createForm('EhsBundle\Form\UsersAgendaType', $usersAgenda);
        $editForm->remove('payment');
        $editForm->add('payment', ChoiceType::class, array(
            'choices' => array(0 => 'Non', 1 => 'Oui'),
            ));
        $editForm->remove('mail');
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usersAgenda);
            $em->flush();

            return $this->redirectToRoute('usersagenda_edit', array('id' => $usersAgenda->getId()));
        }

        return $this->render('usersagenda/edit.html.twig', array(
            'usersAgenda' => $usersAgenda,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a UsersAgenda entity.
     *
     */
    public function deleteAction(Request $request, UsersAgenda $usersAgenda)
    {
        $form = $this->createDeleteForm($usersAgenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usersAgenda);
            $em->flush();
        }

        return $this->redirectToRoute('usersagenda_index');
    }

    /**
     * Creates a form to delete a UsersAgenda entity.
     *
     * @param UsersAgenda $usersAgenda The UsersAgenda entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UsersAgenda $usersAgenda)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usersagenda_delete', array('id' => $usersAgenda->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
