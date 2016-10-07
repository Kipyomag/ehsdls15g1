<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\ImageCollection;
use EhsBundle\Form\ImageCollectionType;

/**
 * ImageCollection controller.
 *
 */
class ImageCollectionController extends Controller
{
    /**
     * Lists all ImageCollection entities.
     *
     */
    /*public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageCollections = $em->getRepository('EhsBundle:ImageCollection')->findAll();

        return $this->render('imagecollection/index.html.twig', array(
            'imageCollections' => $imageCollections,
        ));
    }*/

    /**
     * Creates a new ImageCollection entity.
     *
     */
    public function newAction(Request $request)
    {
        $imageCollection = new ImageCollection();
        $form = $this->createForm('EhsBundle\Form\ImageCollectionType', $imageCollection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($imageCollection->getError() === false) {
                $em = $this->getDoctrine()->getManager();
               
                foreach ($imageCollection->getImages() as $image) {
                    $em->persist($image);
                    $em->flush();
                }

                return $this->redirectToRoute('image_index');
            } else {
                $this->get('session')->getFlashBag()->set('danger', 'Erreur: seul des images peuvent être envoyées.');
            }
        }

        return $this->render('imagecollection/new.html.twig', array(
            'imageCollection' => $imageCollection,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImageCollection entity.
     *
     */
    /*public function showAction(ImageCollection $imageCollection)
    {
        $deleteForm = $this->createDeleteForm($imageCollection);

        return $this->render('imagecollection/show.html.twig', array(
            'imageCollection' => $imageCollection,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing ImageCollection entity.
     *
     */
    /*public function editAction(Request $request, ImageCollection $imageCollection)
    {
        $deleteForm = $this->createDeleteForm($imageCollection);
        $editForm = $this->createForm('EhsBundle\Form\ImageCollectionType', $imageCollection);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageCollection);
            $em->flush();

            return $this->redirectToRoute('imagecollection_edit', array('id' => $imageCollection->getId()));
        }

        return $this->render('imagecollection/edit.html.twig', array(
            'imageCollection' => $imageCollection,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a ImageCollection entity.
     *
     */
    /*public function deleteAction(Request $request, ImageCollection $imageCollection)
    {
        $form = $this->createDeleteForm($imageCollection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imageCollection);
            $em->flush();
        }

        return $this->redirectToRoute('imagecollection_index');
    }*/

    /**
     * Creates a form to delete a ImageCollection entity.
     *
     * @param ImageCollection $imageCollection The ImageCollection entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(ImageCollection $imageCollection)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagecollection_delete', array('id' => $imageCollection->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}
