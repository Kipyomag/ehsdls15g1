<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\Agenda;
use EhsBundle\Form\AgendaType;
use EhsBundle\Entity\UsersAgenda;
/**
 * Agenda controller.
 *
 */
class AgendaController extends Controller
{
    /**
     * Lists all Agenda entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agendas = $em->getRepository('EhsBundle:Agenda')->findAll();

        return $this->render('agenda/index.html.twig', array(
            'agendas' => $agendas,
        ));
    }

    public function apercuAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agendas = $em->getRepository('EhsBundle:Agenda')->findAll();

        return $this->render('agenda/apercu.html.twig', array(
            'agendas' => $agendas,
        ));
    }

    /**
     * Creates a new Agenda entity.
     *
     */
    public function newAction(Request $request)
    {
        $agenda = new Agenda();
        $form = $this->createForm('EhsBundle\Form\AgendaType', $agenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agenda);
            $em->flush();

            return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));
        }

        return $this->render('agenda/new.html.twig', array(
            'agenda' => $agenda,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Agenda entity.
     *
     */
    public function showAction(Agenda $agenda, Request $request)
    {
        $deleteForm = $this->createDeleteForm($agenda);
        $usersAgenda = new UsersAgenda();
        $form = $this->createForm('EhsBundle\Form\UsersAgendaType', $usersAgenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $usersAgenda->setEvent($agenda);
            $em->persist($usersAgenda);
            $em->flush();
            $this->get('session')->getFlashBag()->set('sucess', 'Votre inscription a bien été prise en compte.');
            return $this->redirectToRoute('usersagenda_show', array('id' => $usersAgenda->getId()));
        }

        return $this->render('agenda/show.html.twig', array(
            'usersAgenda' => $usersAgenda,
            'form' => $form->createView(),
            'agenda' => $agenda,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Agenda entity.
     *
     */
    public function editAction(Request $request, Agenda $agenda)
    {
        $deleteForm = $this->createDeleteForm($agenda);
        $editForm = $this->createForm('EhsBundle\Form\AgendaType', $agenda);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agenda);
            $em->flush();

            return $this->redirectToRoute('agenda_index');
        }

        return $this->render('agenda/edit.html.twig', array(
            'agenda' => $agenda,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Agenda entity.
     *
     */
    public function deleteAction(Request $request, Agenda $agenda)
    {
        $form = $this->createDeleteForm($agenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agenda);
            $em->flush();
        }

        return $this->redirectToRoute('agenda_index');
    }

    /**
     * Creates a form to delete a Agenda entity.
     *
     * @param Agenda $agenda The Agenda entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agenda $agenda)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agenda_delete', array('id' => $agenda->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
