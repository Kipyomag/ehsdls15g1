<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\Archive;
use EhsBundle\Form\ArchiveType;

/**
 * Archive controller.
 *
 */
class ArchiveController extends Controller
{
    /**
     * Lists all Archive entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $archives = $em->getRepository('EhsBundle:Archive')->findBy(array(),array('date'=>'DESC'));

        return $this->render('archive/index.html.twig', array(
            'archives' => $archives,
        ));
    }

    /**
     * Creates a new Archive entity.
     *
     */
    public function newAction(Request $request)
    {
        $archive = new Archive();
        $form = $this->createForm('EhsBundle\Form\ArchiveType', $archive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $archive->setDate(new \DateTime());
            $em->persist($archive);
            $em->flush();

            return $this->redirectToRoute('archive_show', array('id' => $archive->getId()));
        }

        return $this->render('archive/new.html.twig', array(
            'archive' => $archive,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Archive entity.
     *
     */
    public function showAction(Archive $archive)
    {
        $deleteForm = $this->createDeleteForm($archive);

        /*$helper = $this->container->get('vich_uploader.templating.helper.uploader_helper');
        $path = $helper->asset($archive, 'documentFile');*/

        return $this->render('archive/show.html.twig', array(
            'archive' => $archive,
            'delete_form' => $deleteForm->createView(),
            //'document_path' => $path,
        ));
    }

    /**
     * Displays a form to edit an existing Archive entity.
     *
     */
    public function editAction(Request $request, Archive $archive)
    {
        $deleteForm = $this->createDeleteForm($archive);
        $editForm = $this->createForm('EhsBundle\Form\ArchiveType', $archive);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($archive);
            $em->flush();

            return $this->redirectToRoute('archive_show', array('id' => $archive->getId()));
        }

        return $this->render('archive/edit.html.twig', array(
            'archive' => $archive,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Archive entity.
     *
     */
    public function deleteAction(Request $request, Archive $archive)
    {
        $form = $this->createDeleteForm($archive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($archive);
            $em->flush();
        }

        return $this->redirectToRoute('archive_index');
    }

    /**
     * Creates a form to delete a Archive entity.
     *
     * @param Archive $archive The Archive entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Archive $archive)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('archive_delete', array('id' => $archive->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
