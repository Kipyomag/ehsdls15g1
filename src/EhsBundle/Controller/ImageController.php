<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\Image;
use EhsBundle\Form\ImageType;

/**
 * Image controller.
 *
 */
class ImageController extends Controller
{
    /**
     * Lists all Image entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $images = $em->getRepository('EhsBundle:Image')->findBy(array(),array('date'=>'DESC'),12);

        return $this->render('image/index.html.twig', array(
            'images' => $images,
        ));
    }

    /**
     * Finds and displays a Image entity.
     *
     */
    public function showAction(Image $image)
    {
        $deleteForm = $this->createDeleteForm($image);

        return $this->render('image/show.html.twig', array(
            'image' => $image,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Image entity.
     *
     */
    public function deleteAction(Request $request, Image $image)
    {
        $form = $this->createDeleteForm($image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();
        }

        return $this->redirectToRoute('image_index');
    }

    /**
     * Creates a form to delete a Image entity.
     *
     * @param Image $image The Image entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Image $image)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('image_delete', array('id' => $image->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }



    /**
     * Displays a page of articles
     *
     */
    public function pageAction(Request $request, $nbr)
    {
        $em = $this->getDoctrine()->getManager();

        $nbrOfImages = 18; //MODIFIABLE = Nombre d'images affichés par page
        $firstImage = ($nbr-1) * $nbrOfImages;

        $images = $em->getRepository('EhsBundle:Image')->findBy(array(),array('date'=>'DESC'),
                $nbrOfImages,
                $firstImage);

        $nbrOfPages = $em->getRepository('EhsBundle:Image')->countAll();
        $nbrOfPages /= $nbrOfImages;

        return $this->render('image/page.html.twig', array(
            'images' => $images,
            'pageNbr' => $nbr,
            'nbrOfPages' => $nbrOfPages,
        ));
    }
}
