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
}
