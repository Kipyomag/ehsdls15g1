<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\Presentation;
use EhsBundle\Form\PresentationType;

/**
 * Presentation controller.
 *
 */
class PresentationController extends Controller
{
    /**
     * Lists all Presentation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $presentations = $em->getRepository('EhsBundle:Presentation')->findAll();

        return $this->render('presentation/index.html.twig', array(
            'presentations' => $presentations,
        ));
    }

    /**
     * Creates a new Presentation entity.
     *
     */
    public function newAction(Request $request)
    {
        $presentation = new Presentation();
        $form = $this->createForm('EhsBundle\Form\PresentationType', $presentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($presentation);
            $em->flush();

            return $this->redirectToRoute('presentation_index');
        }

        return $this->render('presentation/new.html.twig', array(
            'presentation' => $presentation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Presentation entity.
     *
     */
    public function editAction(Request $request, Presentation $presentation)
    {
        $deleteForm = $this->createDeleteForm($presentation);
        $editForm = $this->createForm('EhsBundle\Form\PresentationType', $presentation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($presentation);
            $em->flush();

            return $this->redirectToRoute('presentation_index');
        }

        return $this->render('presentation/edit.html.twig', array(
            'presentation' => $presentation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Presentation entity.
     *
     */
    public function deleteAction(Request $request, Presentation $presentation)
    {
        $form = $this->createDeleteForm($presentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($presentation);
            $em->flush();
        }

        return $this->redirectToRoute('presentation_index');
    }

    /**
     * Creates a form to delete a Presentation entity.
     *
     * @param Presentation $presentation The Presentation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Presentation $presentation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('presentation_delete', array('id' => $presentation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
